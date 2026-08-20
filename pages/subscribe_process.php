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

$email = trim($_POST['email'] ?? '');

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Please provide a valid email address.'
    ]);
    exit;
}

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

// Check if already subscribed
$alreadySubscribed = false;
foreach ($subscribers as $sub) {
    if (isset($sub['email']) && strtolower($sub['email']) === strtolower($email)) {
        $alreadySubscribed = true;
        break;
    }
}

if (!$alreadySubscribed) {
    $subscribers[] = [
        'email' => strtolower($email),
        'subscribed_at' => date('Y-m-d H:i:s'),
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
        'source' => $_POST['source'] ?? 'Engineering Insights Newsletter'
    ];
    @file_put_contents($subscribersFile, json_encode($subscribers, JSON_PRETTY_PRINT));
}

echo json_encode([
    'success' => true,
    'message' => 'Welcome aboard! You are now subscribed to Engineering Insights updates.',
    'email' => htmlspecialchars($email),
    'already_subscribed' => $alreadySubscribed
]);
exit;
