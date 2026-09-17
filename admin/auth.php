<?php
/**
 * Admin Authentication & Session Security Helper
 */

if (session_status() === PHP_SESSION_NONE) {
    // Set secure cookie parameters if applicable
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    session_start();
}

require_once __DIR__ . '/../includes/db.php';

function isAdminLoggedIn(): bool {
    return !empty($_SESSION['admin_logged_in']) && !empty($_SESSION['admin_user_id']);
}

function requireAdminAuth(): void {
    if (!isAdminLoggedIn()) {
        $redirectUrl = (defined('BASE_URL') ? BASE_URL : '../') . 'admin/login.php';
        header("Location: " . $redirectUrl);
        exit;
    }
}

function getLoggedInAdmin(): ?array {
    if (!isAdminLoggedIn()) {
        return null;
    }
    $pdo = getDbConnection();
    if (!$pdo) return null;

    try {
        $stmt = $pdo->prepare("SELECT `id`, `username`, `email`, `created_at` FROM `admin_users` WHERE `id` = ? LIMIT 1");
        $stmt->execute([$_SESSION['admin_user_id']]);
        $user = $stmt->fetch();
        return $user ?: null;
    } catch (PDOException $e) {
        return null;
    }
}

function generateCsrfToken(): string {
    if (empty($_SESSION['admin_csrf_token'])) {
        $_SESSION['admin_csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['admin_csrf_token'];
}

function verifyCsrfToken(?string $token): bool {
    if (empty($_SESSION['admin_csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['admin_csrf_token'], $token);
}
