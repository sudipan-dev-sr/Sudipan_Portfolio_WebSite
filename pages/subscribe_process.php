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

require_once __DIR__ . '/../includes/db.php';

$email  = trim($_POST['email'] ?? '');
$source = trim($_POST['source'] ?? 'Engineering Insights Newsletter');
$ip     = $_SERVER['REMOTE_ADDR'] ?? 'Unknown';

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid email address.'
    ]);
    exit;
}

// 1. Insert into MySQL newsletter_subscribers table
logNewsletterSubscriberDb(strtolower($email), $source, $ip);

// 2. Also keep local JSON log
$logDir = __DIR__ . '/../logs';
if (!is_dir($logDir)) {
    @mkdir($logDir, 0777, true);
}

$subscribersFile = $logDir . '/newsletter_subscribers.json';
$subscribers = [];

if (file_exists($subscribersFile)) {
    $existing = @file_get_contents($subscribersFile);
    if ($existing) {
        $subscribers = json_decode($existing, true) ?: [];
    }
}

// Check if already subscribed in file
$alreadySubscribed = false;
foreach ($subscribers as $sub) {
    if (isset($sub['email']) && strtolower($sub['email']) === strtolower($email)) {
        $alreadySubscribed = true;
        break;
    }
}

if (!$alreadySubscribed) {
    $subscribers[] = [
        'email'         => strtolower($email),
        'subscribed_at' => date('Y-m-d H:i:s'),
        'ip'            => $ip,
        'source'        => $source
    ];
    @file_put_contents($subscribersFile, json_encode($subscribers, JSON_PRETTY_PRINT));

    // 3. Send automated Welcome & Thank You email to the subscriber
    $welcomeError = '';
    $welcomeSent = sendNewsletterWelcomeEmail($email, $welcomeError);

    if ($welcomeSent) {
        logMailEventDb('success', $email, 'Newsletter Welcome & Thank You Email', null, $ip);
    } else {
        logMailEventDb('error', $email, 'Newsletter Welcome Email', $welcomeError, $ip);
    }
}

echo json_encode([
    'success'            => true,
    'message'            => 'Welcome aboard! A thank-you confirmation email has been sent to ' . htmlspecialchars($email) . '.',
    'email'              => htmlspecialchars($email),
    'already_subscribed' => $alreadySubscribed
]);
exit;
