<?php
/**
 * Database Connection, Bootstrap & Migration Helper for Sudipan Portfolio
 * Connects to MySQL (sudipan_portfolio) and manages tables and log synchronization.
 */

require_once __DIR__ . '/mail_config.php';

define('DB_HOST', getPortfolioConfig('DB_HOST', '127.0.0.1'));
define('DB_NAME', getPortfolioConfig('DB_NAME', 'sudipan_portfolio'));
define('DB_USER', getPortfolioConfig('DB_USER', 'root'));
define('DB_PASS', getPortfolioConfig('DB_PASS', ''));

/**
 * Returns a singleton PDO database connection.
 * Automatically initializes tables and imports historical logs on first call.
 */
function getDbConnection(): ?PDO {
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdo = new PDO($dsn, DB_USER, DB_PASS, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);

        // Auto-bootstrap schema if needed
        initializeDatabaseSchema($pdo);

        return $pdo;
    } catch (PDOException $e) {
        error_log("Database connection error: " . $e->getMessage());
        return null;
    }
}

/**
 * Creates tables if they do not exist and imports historical log files.
 */
function initializeDatabaseSchema(PDO $pdo): void {
    // 1. Admin Users Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS `admin_users` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `username` VARCHAR(50) NOT NULL UNIQUE,
        `password_hash` VARCHAR(255) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // Check if default admin exists
    $stmt = $pdo->query("SELECT COUNT(*) FROM `admin_users`");
    if ($stmt->fetchColumn() == 0) {
        // Initial admin credentials: admin / Admin@2026#Sudipan
        $defaultPassHash = password_hash('Admin@2026#Sudipan', PASSWORD_DEFAULT);
        $insertAdmin = $pdo->prepare("INSERT INTO `admin_users` (`username`, `password_hash`, `email`) VALUES (?, ?, ?)");
        $insertAdmin->execute(['admin', $defaultPassHash, 'sudipanmandal@gmail.com']);
    }

    // 2. Contact Submissions Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS `contact_submissions` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(100) NOT NULL,
        `email` VARCHAR(150) NOT NULL,
        `subject` VARCHAR(200) NOT NULL,
        `message` TEXT NOT NULL,
        `ip_address` VARCHAR(45) DEFAULT NULL,
        `status` ENUM('new', 'read', 'replied') DEFAULT 'new',
        `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
        INDEX `idx_status` (`status`),
        INDEX `idx_created_at` (`created_at`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // 3. Mail Logs Table (Stores mail_error.log and email dispatch records)
    $pdo->exec("CREATE TABLE IF NOT EXISTS `mail_logs` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `log_type` ENUM('error', 'success', 'info') DEFAULT 'info',
        `recipient` VARCHAR(150) NOT NULL,
        `subject` VARCHAR(200) DEFAULT NULL,
        `error_message` TEXT DEFAULT NULL,
        `ip_address` VARCHAR(45) DEFAULT NULL,
        `logged_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
        INDEX `idx_log_type` (`log_type`),
        INDEX `idx_logged_at` (`logged_at`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // 4. Newsletter Subscribers Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `email` VARCHAR(150) NOT NULL UNIQUE,
        `source` VARCHAR(100) DEFAULT 'Website',
        `ip_address` VARCHAR(45) DEFAULT NULL,
        `subscribed_at` DATETIME DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // 5. Site Settings Table
    $pdo->exec("CREATE TABLE IF NOT EXISTS `site_settings` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `setting_key` VARCHAR(100) NOT NULL UNIQUE,
        `setting_value` TEXT DEFAULT NULL,
        `updated_at` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    // Seed default site settings if empty
    $settingsCount = $pdo->query("SELECT COUNT(*) FROM `site_settings`")->fetchColumn();
    if ($settingsCount == 0) {
        $defaultSettings = [
            'site_title'        => 'Sudipan Mandal | Portfolio',
            'contact_email'     => 'sudipanmandal@gmail.com',
            'phone'             => '+91 97486 42879',
            'location'          => 'Kolkata, West Bengal, India',
            'github_url'        => 'https://github.com/sudipan-dev-sr',
            'linkedin_url'      => 'https://linkedin.com/in/sudipan-mandal',
            'smtp_host'         => 'smtp.gmail.com',
            'smtp_port'         => '587',
            'smtp_secure'       => 'tls',
            'smtp_user'         => 'sudipanmandal@gmail.com',
            'mail_to'           => 'sudipanmandal@gmail.com'
        ];
        $setStmt = $pdo->prepare("INSERT IGNORE INTO `site_settings` (`setting_key`, `setting_value`) VALUES (?, ?)");
        foreach ($defaultSettings as $k => $v) {
            $setStmt->execute([$k, $v]);
        }
    }

    // Auto-migrate historical log contents if tables are newly initialized
    syncHistoricalLogsToDatabase($pdo);
}

/**
 * Imports existing log files into MySQL if they haven't been imported yet.
 */
function syncHistoricalLogsToDatabase(PDO $pdo): void {
    $logDir = __DIR__ . '/../logs';

    // A. Migrate contact_submissions.log
    $contactLog = $logDir . '/contact_submissions.log';
    if (file_exists($contactLog)) {
        $lines = file($contactLog, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $insertStmt = $pdo->prepare("INSERT INTO `contact_submissions` (`name`, `email`, `subject`, `message`, `ip_address`, `status`, `created_at`) 
            SELECT ?, ?, ?, ?, ?, 'read', ?
            WHERE NOT EXISTS (
                SELECT 1 FROM `contact_submissions` WHERE `email` = ? AND `subject` = ? AND `created_at` = ?
            )");

        foreach ($lines as $line) {
            // Format: [2026-08-19 13:08:50] {"name":"...", ...}
            if (preg_match('/^\[(.*?)\]\s*(\{.*\})$/', trim($line), $matches)) {
                $time = $matches[1];
                $data = json_decode($matches[2], true);
                if (is_array($data) && !empty($data['email'])) {
                    $insertStmt->execute([
                        $data['name'] ?? 'Visitor',
                        $data['email'],
                        $data['subject'] ?? 'General Inquiry',
                        $data['message'] ?? '',
                        $data['ip'] ?? null,
                        $time,
                        $data['email'],
                        $data['subject'] ?? 'General Inquiry',
                        $time
                    ]);
                }
            }
        }
    }

    // B. Migrate contact_messages.json
    $jsonFile = $logDir . '/contact_messages.json';
    if (file_exists($jsonFile)) {
        $raw = file_get_contents($jsonFile);
        $items = json_decode($raw, true);
        if (is_array($items)) {
            $insertJsonStmt = $pdo->prepare("INSERT INTO `contact_submissions` (`name`, `email`, `subject`, `message`, `ip_address`, `status`, `created_at`) 
                SELECT ?, ?, ?, ?, ?, 'read', ?
                WHERE NOT EXISTS (
                    SELECT 1 FROM `contact_submissions` WHERE `email` = ? AND `subject` = ? AND `created_at` = ?
                )");

            foreach ($items as $item) {
                if (!empty($item['email'])) {
                    $time = $item['timestamp'] ?? date('Y-m-d H:i:s');
                    $insertJsonStmt->execute([
                        html_entity_decode($item['name'] ?? 'Visitor'),
                        html_entity_decode($item['email']),
                        html_entity_decode($item['subject'] ?? 'General Inquiry'),
                        html_entity_decode($item['message'] ?? ''),
                        $item['ip'] ?? null,
                        $time,
                        html_entity_decode($item['email']),
                        html_entity_decode($item['subject'] ?? 'General Inquiry'),
                        $time
                    ]);
                }
            }
        }
    }

    // C. Migrate mail_error.log
    $mailErrorLog = $logDir . '/mail_error.log';
    if (file_exists($mailErrorLog)) {
        $lines = file($mailErrorLog, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $insertMailStmt = $pdo->prepare("INSERT INTO `mail_logs` (`log_type`, `recipient`, `subject`, `error_message`, `ip_address`, `logged_at`) 
            SELECT 'error', ?, 'Contact Email Dispatch', ?, '127.0.0.1', ?
            WHERE NOT EXISTS (
                SELECT 1 FROM `mail_logs` WHERE `recipient` = ? AND `logged_at` = ? AND `error_message` = ?
            )");

        foreach ($lines as $line) {
            // Format: [2026-09-17 12:34:22] Failed to send email to sudipanmandal@gmail.com: Error message...
            if (preg_match('/^\[(.*?)\]\s*Failed to send email to (.*?):\s*(.*)$/', trim($line), $matches)) {
                $time = $matches[1];
                $recipient = trim($matches[2]);
                $errorMsg = trim($matches[3]);
                $insertMailStmt->execute([
                    $recipient,
                    $errorMsg,
                    $time,
                    $recipient,
                    $time,
                    $errorMsg
                ]);
            }
        }
    }

    // D. Migrate newsletter_subscribers.json
    $subsFile = $logDir . '/newsletter_subscribers.json';
    if (file_exists($subsFile)) {
        $raw = file_get_contents($subsFile);
        $subscribers = json_decode($raw, true);
        if (is_array($subscribers)) {
            $insertSubStmt = $pdo->prepare("INSERT IGNORE INTO `newsletter_subscribers` (`email`, `source`, `ip_address`, `subscribed_at`) VALUES (?, ?, ?, ?)");
            foreach ($subscribers as $sub) {
                if (!empty($sub['email'])) {
                    $insertSubStmt->execute([
                        $sub['email'],
                        $sub['source'] ?? 'Website',
                        $sub['ip'] ?? null,
                        $sub['subscribed_at'] ?? date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
    }
}

/**
 * Inserts a new contact submission into MySQL.
 */
function logContactSubmissionDb(array $data): bool {
    $pdo = getDbConnection();
    if (!$pdo) return false;

    try {
        $stmt = $pdo->prepare("INSERT INTO `contact_submissions` (`name`, `email`, `subject`, `message`, `ip_address`, `status`, `created_at`) 
            VALUES (?, ?, ?, ?, ?, 'new', ?)");
        return $stmt->execute([
            $data['name'] ?? 'Visitor',
            $data['email'] ?? '',
            $data['subject'] ?? 'General Inquiry',
            $data['message'] ?? '',
            $data['ip'] ?? null,
            $data['timestamp'] ?? date('Y-m-d H:i:s')
        ]);
    } catch (PDOException $e) {
        error_log("Failed to insert contact submission to DB: " . $e->getMessage());
        return false;
    }
}

/**
 * Inserts a mail event log (error or success) into MySQL.
 */
function logMailEventDb(string $type, string $recipient, ?string $subject, ?string $errorMessage, ?string $ip = null): bool {
    $pdo = getDbConnection();
    if (!$pdo) return false;

    try {
        $stmt = $pdo->prepare("INSERT INTO `mail_logs` (`log_type`, `recipient`, `subject`, `error_message`, `ip_address`, `logged_at`) 
            VALUES (?, ?, ?, ?, ?, NOW())");
        return $stmt->execute([
            $type,
            $recipient,
            $subject,
            $errorMessage,
            $ip
        ]);
    } catch (PDOException $e) {
        error_log("Failed to insert mail log to DB: " . $e->getMessage());
        return false;
    }
}

/**
 * Inserts or updates a subscriber into MySQL.
 */
function logNewsletterSubscriberDb(string $email, string $source = 'Website', ?string $ip = null): bool {
    $pdo = getDbConnection();
    if (!$pdo) return false;

    try {
        $stmt = $pdo->prepare("INSERT INTO `newsletter_subscribers` (`email`, `source`, `ip_address`, `subscribed_at`) 
            VALUES (?, ?, ?, NOW()) 
            ON DUPLICATE KEY UPDATE `source` = VALUES(`source`)");
        return $stmt->execute([$email, $source, $ip]);
    } catch (PDOException $e) {
        error_log("Failed to insert newsletter subscriber to DB: " . $e->getMessage());
        return false;
    }
}

/**
 * Retrieves a site setting from the DB with a fallback.
 */
function getSiteSetting(string $key, $default = '') {
    $pdo = getDbConnection();
    if (!$pdo) return $default;

    try {
        $stmt = $pdo->prepare("SELECT `setting_value` FROM `site_settings` WHERE `setting_key` = ? LIMIT 1");
        $stmt->execute([$key]);
        $val = $stmt->fetchColumn();
        return ($val !== false && $val !== null) ? $val : $default;
    } catch (PDOException $e) {
        return $default;
    }
}

/**
 * Saves or updates a site setting in the DB.
 */
function setSiteSetting(string $key, $value): bool {
    $pdo = getDbConnection();
    if (!$pdo) return false;

    try {
        $stmt = $pdo->prepare("INSERT INTO `site_settings` (`setting_key`, `setting_value`) 
            VALUES (?, ?) 
            ON DUPLICATE KEY UPDATE `setting_value` = VALUES(`setting_value`)");
        return $stmt->execute([$key, $value]);
    } catch (PDOException $e) {
        error_log("Failed to save site setting: " . $e->getMessage());
        return false;
    }
}
