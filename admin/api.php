<?php

require_once __DIR__ . '/auth.php';
requireAdminAuth();

header('Content-Type: application/json; charset=utf-8');

$action = $_POST['action'] ?? $_GET['action'] ?? '';
$pdo = getDbConnection();

if (!$pdo) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
    exit;
}

// 1. Update Contact Submission Status
if ($action === 'update_status') {
    $id = (int)($_POST['id'] ?? 0);
    $status = trim($_POST['status'] ?? '');
    if (!in_array($status, ['new', 'read', 'replied'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid status value.']);
        exit;
    }

    $stmt = $pdo->prepare("UPDATE `contact_submissions` SET `status` = ? WHERE `id` = ?");
    $stmt->execute([$status, $id]);
    echo json_encode(['success' => true, 'message' => "Message marked as {$status}."]);
    exit;
}

// 2. Delete Contact Submission
if ($action === 'delete_message') {
    $id = (int)($_POST['id'] ?? 0);
    $stmt = $pdo->prepare("DELETE FROM `contact_submissions` WHERE `id` = ?");
    $stmt->execute([$id]);
    echo json_encode(['success' => true, 'message' => 'Message deleted successfully.']);
    exit;
}

// 3. Delete Newsletter Subscriber
if ($action === 'delete_subscriber') {
    $id = (int)($_POST['id'] ?? 0);
    $stmt = $pdo->prepare("DELETE FROM `newsletter_subscribers` WHERE `id` = ?");
    $stmt->execute([$id]);
    echo json_encode(['success' => true, 'message' => 'Subscriber removed successfully.']);
    exit;
}

// 4. Save Site & SMTP Settings
if ($action === 'save_settings') {
    $allowedKeys = [
        'site_title', 'contact_email', 'phone', 'location', 
        'github_url', 'linkedin_url', 
        'smtp_host', 'smtp_port', 'smtp_secure', 'smtp_user', 'mail_to'
    ];

    $stmt = $pdo->prepare("INSERT INTO `site_settings` (`setting_key`, `setting_value`) 
        VALUES (?, ?) 
        ON DUPLICATE KEY UPDATE `setting_value` = VALUES(`setting_value`)");

    foreach ($allowedKeys as $key) {
        if (isset($_POST[$key])) {
            $val = trim($_POST[$key]);
            $stmt->execute([$key, $val]);
        }
    }

    // If new SMTP password was entered
    if (!empty($_POST['smtp_pass'])) {
        $pass = trim($_POST['smtp_pass']);
        $stmt->execute(['smtp_pass', $pass]);

        // Also update .env file so PHPMailer reads it immediately
        $envPath = __DIR__ . '/../.env';
        if (file_exists($envPath)) {
            $envContent = file_get_contents($envPath);
            if (preg_match('/^SMTP_PASS=.*$/m', $envContent)) {
                $envContent = preg_replace('/^SMTP_PASS=.*$/m', 'SMTP_PASS=' . $pass, $envContent);
            } else {
                $envContent .= "\nSMTP_PASS=" . $pass;
            }
            file_put_contents($envPath, $envContent);
        }
    }

    echo json_encode(['success' => true, 'message' => 'Settings saved and updated successfully.']);
    exit;
}

// 5. Change Admin Password
if ($action === 'change_password') {
    $currentPass = trim($_POST['current_password'] ?? '');
    $newPass     = trim($_POST['new_password'] ?? '');
    $confirmPass = trim($_POST['confirm_password'] ?? '');
    $adminId     = $_SESSION['admin_user_id'] ?? 0;

    if (empty($currentPass) || empty($newPass)) {
        echo json_encode(['success' => false, 'message' => 'All password fields are required.']);
        exit;
    }

    if ($newPass !== $confirmPass) {
        echo json_encode(['success' => false, 'message' => 'New password and confirmation do not match.']);
        exit;
    }

    if (strlen($newPass) < 8) {
        echo json_encode(['success' => false, 'message' => 'New password must be at least 8 characters long.']);
        exit;
    }

    $stmt = $pdo->prepare("SELECT `password_hash` FROM `admin_users` WHERE `id` = ? LIMIT 1");
    $stmt->execute([$adminId]);
    $currentHash = $stmt->fetchColumn();

    if (!$currentHash || !password_verify($currentPass, $currentHash)) {
        echo json_encode(['success' => false, 'message' => 'Current password is incorrect.']);
        exit;
    }

    $newHash = password_hash($newPass, PASSWORD_DEFAULT);
    $updateStmt = $pdo->prepare("UPDATE `admin_users` SET `password_hash` = ? WHERE `id` = ?");
    $updateStmt->execute([$newHash, $adminId]);

    echo json_encode(['success' => true, 'message' => 'Admin password changed successfully.']);
    exit;
}

// 6. Clear Logs
if ($action === 'clear_logs') {
    $logType = trim($_POST['log_type'] ?? '');
    $logDir = __DIR__ . '/../logs';

    if ($logType === 'mail_error') {
        @file_put_contents($logDir . '/mail_error.log', '');
        $pdo->exec("DELETE FROM `mail_logs` WHERE `log_type` = 'error'");
        echo json_encode(['success' => true, 'message' => 'Mail error logs cleared.']);
        exit;
    } elseif ($logType === 'contact_submissions') {
        @file_put_contents($logDir . '/contact_submissions.log', '');
        echo json_encode(['success' => true, 'message' => 'Contact submissions raw file log cleared.']);
        exit;
    }

    echo json_encode(['success' => false, 'message' => 'Invalid log type.']);
    exit;
}

// 7. Re-sync Logs into MySQL
if ($action === 'resync_logs') {
    syncHistoricalLogsToDatabase($pdo);
    $msgCount = $pdo->query("SELECT COUNT(*) FROM `contact_submissions`")->fetchColumn();
    $errCount = $pdo->query("SELECT COUNT(*) FROM `mail_logs`")->fetchColumn();
    echo json_encode([
        'success' => true, 
        'message' => "Log synchronization completed. Total Contact Records in DB: {$msgCount}, Total Mail Logs: {$errCount}."
    ]);
    exit;
}

// 8. Download Log File
if ($action === 'download_log') {
    $file = trim($_GET['file'] ?? '');
    $logDir = realpath(__DIR__ . '/../logs');
    $filePath = realpath($logDir . '/' . basename($file));

    if ($filePath && strpos($filePath, $logDir) === 0 && file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        die("Log file not found.");
    }
}

echo json_encode(['success' => false, 'message' => 'Unknown action.']);
exit;
