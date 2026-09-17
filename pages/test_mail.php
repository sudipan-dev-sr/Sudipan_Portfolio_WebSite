<?php
/**
 * SMTP Diagnostic & Test Utility
 * Access via browser: http://localhost/Sudipan_Portfolio_WebSite/pages/test_mail.php
 */

require_once __DIR__ . '/../includes/mail_config.php';

$action = $_GET['action'] ?? '';
$output = [];
$testResult = null;

// 1. Diagnostics
$phpVersion = phpversion();
$opensslLoaded = extension_loaded('openssl');
$curlLoaded = extension_loaded('curl');

$hasPassword = !empty(MAIL_SMTP_PASS) && strpos(MAIL_SMTP_PASS, 'your_16_character_app_password_here') === false;

// 2. Connectivity Test
$connectionOk = false;
$connError = '';
$socket = @fsockopen(MAIL_SMTP_HOST, MAIL_SMTP_PORT, $errno, $errstr, 5);
if ($socket) {
    $connectionOk = true;
    fclose($socket);
} else {
    $connError = "{$errstr} ({$errno})";
}

// 3. Live Test Email Dispatch
if ($action === 'send_test') {
    if (!$hasPassword) {
        $testResult = [
            'success' => false,
            'message' => 'Please set your SMTP_PASS (e.g. 16-character Gmail App Password) in your .env or includes/mail_config.php first.'
        ];
    } else {
        $mailError = '';
        $sent = sendPortfolioEmail([
            'name'    => 'Diagnostic Test Runner',
            'email'   => MAIL_SMTP_USER,
            'subject' => 'Live SMTP Connection Test',
            'message' => "Hello Sudipan,\n\nThis is a confirmation test email from your Portfolio Website. Your SMTP setup is working perfectly!",
            'ip'      => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
        ], $mailError);

        $testResult = [
            'success' => $sent,
            'message' => $sent ? "Success! A live test email has been sent to " . MAIL_TO_ADDRESS . "." : "Failed: " . $mailError
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Mail Diagnostics - Sudipan Mandal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen py-10 px-4 font-sans">
    <div class="max-w-2xl mx-auto bg-slate-800/80 rounded-2xl border border-slate-700 p-6 sm:p-8 shadow-2xl backdrop-blur-md">
        
        <div class="flex items-center justify-between pb-6 border-b border-slate-700 mb-6">
            <div>
                <h1 class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="fa-solid fa-envelope-circle-check text-emerald-400"></i>
                    Email & SMTP Diagnostics
                </h1>
                <p class="text-xs text-slate-400 mt-1">Sudipan Mandal Portfolio Contact Engine</p>
            </div>
            <a href="../pages/contact.php" class="text-xs text-purple-400 hover:text-purple-300 transition flex items-center gap-1">
                <i class="fa-solid fa-arrow-left"></i> Back to Contact Form
            </a>
        </div>

        <?php if ($testResult): ?>
            <div class="mb-6 p-4 rounded-xl border text-sm font-semibold flex items-center gap-3 <?= $testResult['success'] ? 'bg-emerald-950/60 border-emerald-500/50 text-emerald-300' : 'bg-red-950/60 border-red-500/50 text-red-300' ?>">
                <i class="fa-solid <?= $testResult['success'] ? 'fa-circle-check text-emerald-400 text-lg' : 'fa-circle-exclamation text-red-400 text-lg' ?>"></i>
                <div><?= htmlspecialchars($testResult['message']) ?></div>
            </div>
        <?php endif; ?>

        <!-- Diagnostic Items -->
        <div class="space-y-3 mb-8">
            <h2 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">System & Server Status</h2>
            
            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">PHP Version</span>
                <span class="font-mono font-bold text-slate-200"><?= $phpVersion ?> (PHP 8.0+)</span>
            </div>

            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">OpenSSL Extension</span>
                <span class="font-semibold flex items-center gap-1.5 <?= $opensslLoaded ? 'text-emerald-400' : 'text-red-400' ?>">
                    <i class="fa-solid <?= $opensslLoaded ? 'fa-check' : 'fa-xmark' ?>"></i>
                    <?= $opensslLoaded ? 'Loaded (TLS/SSL Supported)' : 'Missing' ?>
                </span>
            </div>

            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">SMTP Host Connection (<?= MAIL_SMTP_HOST ?>:<?= MAIL_SMTP_PORT ?>)</span>
                <span class="font-semibold flex items-center gap-1.5 <?= $connectionOk ? 'text-emerald-400' : 'text-red-400' ?>">
                    <i class="fa-solid <?= $connectionOk ? 'fa-check' : 'fa-xmark' ?>"></i>
                    <?= $connectionOk ? 'Connected Successfully' : 'Failed: ' . htmlspecialchars($connError) ?>
                </span>
            </div>

            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">SMTP User / Username</span>
                <span class="font-mono text-slate-200"><?= htmlspecialchars(MAIL_SMTP_USER) ?></span>
            </div>

            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">SMTP Password Status</span>
                <span class="font-semibold flex items-center gap-1.5 <?= $hasPassword ? 'text-emerald-400' : 'text-amber-400' ?>">
                    <i class="fa-solid <?= $hasPassword ? 'fa-check' : 'fa-triangle-exclamation' ?>"></i>
                    <?= $hasPassword ? 'Configured (' . str_repeat('•', 8) . ')' : 'Not Set (Set in .env)' ?>
                </span>
            </div>

            <div class="flex items-center justify-between p-3.5 rounded-xl bg-slate-900/60 border border-slate-700/60 text-xs">
                <span class="text-slate-300">Recipient Email (Destination)</span>
                <span class="font-mono text-emerald-400 font-semibold"><?= htmlspecialchars(MAIL_TO_ADDRESS) ?></span>
            </div>
        </div>

        <!-- How to configure Gmail App Password -->
        <?php if (!$hasPassword): ?>
        <div class="mb-8 p-5 rounded-xl bg-indigo-950/40 border border-indigo-500/30 text-xs text-slate-300 space-y-2">
            <div class="font-bold text-indigo-400 flex items-center gap-1.5 text-sm mb-1">
                <i class="fa-brands fa-google"></i> How to set up Gmail App Password (1 minute):
            </div>
            <ol class="list-decimal pl-5 space-y-1 text-slate-300">
                <li>Log in to your Google Account (<strong class="text-white">sudipanmandal@gmail.com</strong>) and go to <a href="https://myaccount.google.com/security" target="_blank" class="text-purple-400 underline">myaccount.google.com/security</a>.</li>
                <li>Make sure <strong class="text-white">2-Step Verification</strong> is ON.</li>
                <li>Search for <a href="https://myaccount.google.com/apppasswords" target="_blank" class="text-purple-400 underline font-bold">App passwords</a> in Google Account.</li>
                <li>Create an App name (e.g. <em>Portfolio Website</em>) & click Generate.</li>
                <li>Copy the 16-character password and open your project's <code class="bg-slate-900 px-1.5 py-0.5 rounded text-indigo-300">.env</code> file.</li>
                <li>Set <code class="bg-slate-900 px-1.5 py-0.5 rounded text-indigo-300">SMTP_PASS=xxxx xxxx xxxx xxxx</code> and save.</li>
            </ol>
        </div>
        <?php endif; ?>

        <!-- Action Button -->
        <div class="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-slate-700">
            <a href="test_mail.php?action=send_test" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white text-xs font-bold transition flex items-center gap-2 shadow-lg shadow-purple-500/20">
                <i class="fa-solid fa-paper-plane"></i>
                <span>Send Live Test Email</span>
            </a>
            
            <a href="test_mail.php" class="text-xs text-slate-400 hover:text-white transition">
                <i class="fa-solid fa-rotate-right mr-1"></i> Refresh Diagnostics
            </a>
        </div>

    </div>
</body>
</html>
