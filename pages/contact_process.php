<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method. Only POST requests are permitted.'
    ]);
    exit;
}

// Load Mail Configuration & Database Helper
require_once __DIR__ . '/../includes/mail_config.php';
require_once __DIR__ . '/../includes/db.php';

// Retrieve POST fields
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'General Engineering Inquiry');
$message = trim($_POST['message'] ?? '');
$hp      = trim($_POST['website_hp'] ?? ''); // Honeypot field for spam prevention

// If honeypot is filled, silent reject
if (!empty($hp)) {
    echo json_encode([
        'success' => true,
        'message' => 'Your message has been processed.'
    ]);
    exit;
}

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Full Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Name is too short.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if (empty($message)) {
    $errors[] = 'Message cannot be empty.';
} elseif (strlen($message) < 5) {
    $errors[] = 'Please provide a more detailed message (min 5 characters).';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
$timestamp = date('Y-m-d H:i:s');

// 1. Store submission in MySQL Database
logContactSubmissionDb([
    'name'      => $name,
    'email'     => $email,
    'subject'   => $subject,
    'message'   => $message,
    'ip'        => $ipAddress,
    'timestamp' => $timestamp
]);

// 2. Also keep local file logs (contact_submissions.log and contact_messages.json)
$logDir = __DIR__ . '/../logs';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0777, true);
}

// Text Log
@file_put_contents($logDir . '/contact_submissions.log', date('[Y-m-d H:i:s] ') . json_encode([
    'name'      => $name,
    'email'     => $email,
    'subject'   => $subject,
    'message'   => $message,
    'ip'        => $ipAddress
]) . PHP_EOL, FILE_APPEND);

// Structured JSON Storage
$jsonFile = $logDir . '/contact_messages.json';
$allMessages = [];
if (file_exists($jsonFile)) {
    $raw = @file_get_contents($jsonFile);
    if ($raw) {
        $allMessages = json_decode($raw, true) ?: [];
    }
}
$msgId = uniqid('msg_');
$allMessages[] = [
    'id'        => $msgId,
    'name'      => htmlspecialchars($name),
    'email'     => htmlspecialchars($email),
    'subject'   => htmlspecialchars($subject),
    'message'   => htmlspecialchars($message),
    'timestamp' => $timestamp,
    'ip'        => $ipAddress
];
@file_put_contents($jsonFile, json_encode($allMessages, JSON_PRETTY_PRINT));

// 3. Dispatch real email via PHPMailer
$mailError = '';
$emailSent = sendPortfolioEmail([
    'name'    => $name,
    'email'   => $email,
    'subject' => $subject,
    'message' => $message,
    'ip'      => $ipAddress
], $mailError);

if ($emailSent) {
    // 1. Log notification success in database
    logMailEventDb('success', MAIL_TO_ADDRESS, "Contact Inquiry from {$name}", null, $ipAddress);

    // 2. Dispatch automated Thank You & Confirmation email to the visitor
    $ackError = '';
    $ackSent = sendInquiryAcknowledgmentEmail([
        'name'    => $name,
        'email'   => $email,
        'subject' => $subject,
        'message' => $message
    ], $ackError);

    if ($ackSent) {
        logMailEventDb('success', $email, "Auto-Reply Thank You to {$name}", null, $ipAddress);
    } else {
        logMailEventDb('error', $email, "Auto-Reply to {$name}", $ackError, $ipAddress);
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your message has been sent successfully. A confirmation email has been sent to ' . htmlspecialchars($email) . ' and I will get back to you within 24 hours.'
    ]);
    exit;
} else {
    // Log mail dispatch error to file and MySQL
    @file_put_contents($logDir . '/mail_error.log', date('[Y-m-d H:i:s] ') . "Failed to send email to " . MAIL_TO_ADDRESS . ": " . $mailError . PHP_EOL, FILE_APPEND);
    logMailEventDb('error', MAIL_TO_ADDRESS, "Contact Inquiry from {$name}", $mailError, $ipAddress);

    http_response_code(200);
    echo json_encode([
        'success'    => false,
        'is_logged'  => true,
        'error'      => $mailError,
        'message'    => 'Thank you, ' . htmlspecialchars($name) . '. Your message was received and saved in our system, but direct email delivery encountered an issue (' . htmlspecialchars($mailError) . '). Please feel free to also reach me directly at ' . MAIL_TO_ADDRESS . '.'
    ]);
    exit;
}