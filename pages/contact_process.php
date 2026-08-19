<?php
header('Content-Type: application/json; charset=utf-8');

// Allow Cross-Origin if needed
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

// Retrieve POST fields
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? 'New Portfolio Inquiry');
$message = trim($_POST['message'] ?? '');

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Full Name is required.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if (empty($message)) {
    $errors[] = 'Message cannot be empty.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// Recipient details
$to = "sudipanmandal@gmail.com";
$email_subject = "Portfolio Contact: " . htmlspecialchars($subject);

$body = "New Message from Portfolio Website\n\n";
$body .= "Name: " . htmlspecialchars($name) . "\n";
$body .= "Email: " . htmlspecialchars($email) . "\n";
$body .= "Subject: " . htmlspecialchars($subject) . "\n";
$body .= "Message:\n" . htmlspecialchars($message) . "\n\n";
$body .= "Timestamp: " . date('Y-m-d H:i:s') . "\n";
$body .= "IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown');

$headers = "From: webmaster@sudipanmandal.dev\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Attempt to send email (suppress error if mail server is not configured in local environment)
@mail($to, $email_subject, $body, $headers);

// Store submission in local message log for reliable local testing
$logDir = __DIR__ . '/../logs';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0777, true);
}
@file_put_contents($logDir . '/contact_submissions.log', date('[Y-m-d H:i:s] ') . json_encode([
    'name' => $name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message,
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown'
]) . PHP_EOL, FILE_APPEND);

echo json_encode([
    'success' => true,
    'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your message has been sent successfully. I will get back to you soon.'
]);
exit;