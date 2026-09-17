<?php
/**
 * Sudipan Mandal Portfolio - Admin Control Center & Dashboard
 */

require_once __DIR__ . '/auth.php';
requireAdminAuth();

$pdo = getDbConnection();
if (!$pdo) {
    die("Database connection failed. Please ensure MySQL is running in XAMPP.");
}

$admin = getLoggedInAdmin();

// Fetch KPI Statistics
$totalMessages = (int)$pdo->query("SELECT COUNT(*) FROM `contact_submissions`")->fetchColumn();
$newMessages   = (int)$pdo->query("SELECT COUNT(*) FROM `contact_submissions` WHERE `status` = 'new'")->fetchColumn();
$repliedCount  = (int)$pdo->query("SELECT COUNT(*) FROM `contact_submissions` WHERE `status` = 'replied'")->fetchColumn();
$subscribersCount = (int)$pdo->query("SELECT COUNT(*) FROM `newsletter_subscribers`")->fetchColumn();
$mailErrorsCount  = (int)$pdo->query("SELECT COUNT(*) FROM `mail_logs` WHERE `log_type` = 'error'")->fetchColumn();

// Fetch Submissions
$submissions = $pdo->query("SELECT * FROM `contact_submissions` ORDER BY `created_at` DESC")->fetchAll();

// Fetch Mail Logs
$mailLogs = $pdo->query("SELECT * FROM `mail_logs` ORDER BY `logged_at` DESC LIMIT 100")->fetchAll();

// Fetch Newsletter Subscribers
$subscribers = $pdo->query("SELECT * FROM `newsletter_subscribers` ORDER BY `subscribed_at` DESC")->fetchAll();

// Read Raw Logs
$logDir = __DIR__ . '/../logs';
$rawContactLog = file_exists($logDir . '/contact_submissions.log') ? file_get_contents($logDir . '/contact_submissions.log') : '(No log file found)';
$rawMailErrorLog = file_exists($logDir . '/mail_error.log') ? file_get_contents($logDir . '/mail_error.log') : '(No log file found)';

// Fetch Site Settings
$settingsRows = $pdo->query("SELECT `setting_key`, `setting_value` FROM `site_settings`")->fetchAll(PDO::FETCH_KEY_PAIR);
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard &bull; Sudipan Mandal Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f17;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.08) 0px, transparent 40%),
                radial-gradient(at 100% 100%, rgba(16, 185, 129, 0.08) 0px, transparent 40%);
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.07);
        }
        .glass-card-hover:hover {
            border-color: rgba(99, 102, 241, 0.3);
        }
        .tab-btn.active {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.2) 0%, rgba(16, 185, 129, 0.2) 100%);
            border-color: rgba(99, 102, 241, 0.4);
            color: #ffffff;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
    </style>
</head>
<body class="min-h-screen text-slate-100 flex flex-col">

    <!-- Top Navigation Bar -->
    <header class="sticky top-0 z-40 glass-card border-b border-slate-800 px-5 sm:px-8 py-3.5 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-purple-600 to-emerald-400 flex items-center justify-center font-bold text-white shadow-md shadow-purple-500/20">
                <i class="fa-solid fa-code text-sm"></i>
            </div>
            <div>
                <h1 class="text-sm font-bold tracking-tight text-white flex items-center gap-2">
                    <span>Sudipan Mandal</span>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-semibold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">Admin Suite</span>
                </h1>
                <p class="text-[11px] text-slate-400">Database: <code class="text-indigo-400 font-mono">sudipan_portfolio</code> &bull; MySQL Active</p>
            </div>
        </div>

        <div class="flex items-center gap-3">
            <a href="../index.php" target="_blank" class="px-3 py-1.5 rounded-xl border border-slate-700 glass-card text-xs text-slate-300 hover:text-white hover:border-purple-500 transition flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                <span class="hidden sm:inline">View Public Site</span>
            </a>

            <div class="h-4 w-px bg-slate-800"></div>

            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-xs text-purple-400 font-bold">
                    <?= strtoupper(substr($admin['username'] ?? 'A', 0, 1)) ?>
                </div>
                <div class="hidden md:block text-left text-xs">
                    <span class="font-bold text-white block"><?= htmlspecialchars($admin['username'] ?? 'Admin') ?></span>
                    <span class="text-[10px] text-slate-400 block"><?= htmlspecialchars($admin['email'] ?? '') ?></span>
                </div>
            </div>

            <a href="logout.php" title="Sign Out" class="p-2 rounded-xl text-slate-400 hover:text-red-400 hover:bg-red-950/40 transition">
                <i class="fa-solid fa-arrow-right-from-bracket text-sm"></i>
            </a>
        </div>
    </header>

    <!-- Main Container -->
    <main class="flex-1 max-w-7xl w-full mx-auto p-4 sm:p-8 space-y-6">
        
        <!-- Toast Notification Alert -->
        <div id="toastAlert" class="hidden fixed bottom-6 right-6 z-50 p-4 rounded-2xl glass-card border text-xs sm:text-sm font-semibold shadow-2xl flex items-center gap-3 animate-bounce">
            <i id="toastIcon" class="text-base"></i>
            <span id="toastMsg"></span>
        </div>

        <!-- KPI Statistic Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Total Inquiries -->
            <div class="glass-card rounded-2xl p-5 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Total Inquiries</span>
                    <div class="text-2xl sm:text-3xl font-extrabold text-white"><?= $totalMessages ?></div>
                    <span class="text-[11px] text-emerald-400 mt-1 block flex items-center gap-1">
                        <i class="fa-solid fa-check text-[10px]"></i> <?= $repliedCount ?> Replied
                    </span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-purple-500/15 border border-purple-500/30 text-purple-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-inbox"></i>
                </div>
            </div>

            <!-- New / Unread Messages -->
            <div class="glass-card rounded-2xl p-5 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Unread Inquiries</span>
                    <div class="text-2xl sm:text-3xl font-extrabold text-amber-400"><?= $newMessages ?></div>
                    <span class="text-[11px] text-slate-400 mt-1 block">Awaiting response</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-amber-500/15 border border-amber-500/30 text-amber-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-envelope-open-text"></i>
                </div>
            </div>

            <!-- Newsletter Subscribers -->
            <div class="glass-card rounded-2xl p-5 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Subscribers</span>
                    <div class="text-2xl sm:text-3xl font-extrabold text-emerald-400"><?= $subscribersCount ?></div>
                    <span class="text-[11px] text-slate-400 mt-1 block">Newsletter list</span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-users"></i>
                </div>
            </div>

            <!-- Mail Dispatch Status -->
            <div class="glass-card rounded-2xl p-5 border border-slate-800 flex items-center justify-between">
                <div>
                    <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-1">Mail Error Logs</span>
                    <div class="text-2xl sm:text-3xl font-extrabold <?= $mailErrorsCount > 0 ? 'text-rose-400' : 'text-emerald-400' ?>"><?= $mailErrorsCount ?></div>
                    <span class="text-[11px] text-slate-400 mt-1 block"><?= $mailErrorsCount > 0 ? 'Review mail_error.log' : 'System healthy' ?></span>
                </div>
                <div class="w-12 h-12 rounded-xl bg-rose-500/15 border border-rose-500/30 text-rose-400 flex items-center justify-center text-lg">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex flex-wrap items-center gap-2 border-b border-slate-800 pb-3">
            <button onclick="switchTab('inquiries')" class="tab-btn active px-4 py-2.5 rounded-xl border border-slate-700 text-xs font-bold transition flex items-center gap-2">
                <i class="fa-solid fa-comments"></i>
                <span>Contact Inquiries</span>
                <?php if ($newMessages > 0): ?>
                    <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-amber-500 text-slate-950 font-bold"><?= $newMessages ?></span>
                <?php endif; ?>
            </button>

            <button onclick="switchTab('logs')" class="tab-btn px-4 py-2.5 rounded-xl border border-slate-800 text-xs font-bold text-slate-400 hover:text-white transition flex items-center gap-2">
                <i class="fa-solid fa-file-lines"></i>
                <span>Log Center (File & DB)</span>
            </button>

            <button onclick="switchTab('subscribers')" class="tab-btn px-4 py-2.5 rounded-xl border border-slate-800 text-xs font-bold text-slate-400 hover:text-white transition flex items-center gap-2">
                <i class="fa-solid fa-newspaper"></i>
                <span>Newsletter Subscribers (<?= $subscribersCount ?>)</span>
            </button>

            <button onclick="switchTab('settings')" class="tab-btn px-4 py-2.5 rounded-xl border border-slate-800 text-xs font-bold text-slate-400 hover:text-white transition flex items-center gap-2">
                <i class="fa-solid fa-sliders"></i>
                <span>SMTP & Website Settings</span>
            </button>

            <button onclick="switchTab('security')" class="tab-btn px-4 py-2.5 rounded-xl border border-slate-800 text-xs font-bold text-slate-400 hover:text-white transition flex items-center gap-2">
                <i class="fa-solid fa-lock"></i>
                <span>Security / Password</span>
            </button>
        </div>

        <!-- TAB 1: CONTACT INQUIRIES -->
        <section id="tab-inquiries" class="tab-content space-y-4">
            
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-400">Filter Status:</span>
                    <button onclick="filterInquiries('all', this)" class="filter-pill active px-3 py-1 rounded-lg text-xs font-semibold bg-purple-600 text-white transition">All</button>
                    <button onclick="filterInquiries('new', this)" class="filter-pill px-3 py-1 rounded-lg text-xs font-semibold bg-slate-800 text-slate-400 hover:text-white transition">New</button>
                    <button onclick="filterInquiries('read', this)" class="filter-pill px-3 py-1 rounded-lg text-xs font-semibold bg-slate-800 text-slate-400 hover:text-white transition">Read</button>
                    <button onclick="filterInquiries('replied', this)" class="filter-pill px-3 py-1 rounded-lg text-xs font-semibold bg-slate-800 text-slate-400 hover:text-white transition">Replied</button>
                </div>

                <div class="relative w-full sm:w-64">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-500">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </span>
                    <input type="text" id="inquirySearch" onkeyup="searchInquiries()" placeholder="Search name, email, topic..." class="w-full pl-9 pr-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white placeholder-slate-500 outline-none focus:border-purple-500 transition">
                </div>
            </div>

            <!-- Inquiries Table Card -->
            <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs" id="inquiriesTable">
                        <thead class="bg-slate-900/80 uppercase tracking-wider text-slate-400 font-bold border-b border-slate-800 text-[11px]">
                            <tr>
                                <th class="py-3.5 px-4">#</th>
                                <th class="py-3.5 px-4">Sender</th>
                                <th class="py-3.5 px-4">Subject / Topic</th>
                                <th class="py-3.5 px-4">Message Snippet</th>
                                <th class="py-3.5 px-4">Date & Time</th>
                                <th class="py-3.5 px-4">Status</th>
                                <th class="py-3.5 px-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60" id="inquiriesTableBody">
                            <?php if (empty($submissions)): ?>
                                <tr>
                                    <td colspan="7" class="py-8 text-center text-slate-500">
                                        <i class="fa-regular fa-folder-open text-3xl mb-2 block text-slate-600"></i>
                                        No contact inquiries recorded yet.
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($submissions as $idx => $msg): ?>
                                    <tr class="inquiry-row hover:bg-slate-800/40 transition group" data-status="<?= htmlspecialchars($msg['status']) ?>" id="row-<?= $msg['id'] ?>">
                                        <td class="py-3.5 px-4 font-mono text-slate-500"><?= $msg['id'] ?></td>
                                        <td class="py-3.5 px-4">
                                            <div class="font-bold text-white"><?= htmlspecialchars($msg['name']) ?></div>
                                            <a href="mailto:<?= htmlspecialchars($msg['email']) ?>" class="text-[11px] text-purple-400 hover:underline"><?= htmlspecialchars($msg['email']) ?></a>
                                        </td>
                                        <td class="py-3.5 px-4 font-medium text-slate-200">
                                            <?= htmlspecialchars($msg['subject']) ?>
                                        </td>
                                        <td class="py-3.5 px-4 text-slate-400 max-w-xs truncate">
                                            <?= htmlspecialchars(substr($msg['message'], 0, 80)) ?>...
                                        </td>
                                        <td class="py-3.5 px-4 text-slate-400 whitespace-nowrap font-mono text-[11px]">
                                            <?= htmlspecialchars($msg['created_at']) ?>
                                        </td>
                                        <td class="py-3.5 px-4" id="badge-<?= $msg['id'] ?>">
                                            <?php if ($msg['status'] === 'new'): ?>
                                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">NEW</span>
                                            <?php elseif ($msg['status'] === 'replied'): ?>
                                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">REPLIED</span>
                                            <?php else: ?>
                                                <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-slate-700/60 text-slate-300">READ</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="py-3.5 px-4 text-right whitespace-nowrap space-x-1">
                                            <!-- View Modal Button -->
                                            <button onclick="openMessageModal(<?= htmlspecialchars(json_encode($msg)) ?>)" class="p-1.5 rounded-lg text-slate-300 hover:text-white hover:bg-slate-700 transition" title="View Full Message">
                                                <i class="fa-regular fa-eye"></i>
                                            </button>
                                            <!-- Quick Reply -->
                                            <a href="mailto:<?= htmlspecialchars($msg['email']) ?>?subject=<?= rawurlencode('Re: ' . $msg['subject']) ?>" class="inline-block p-1.5 rounded-lg text-emerald-400 hover:bg-emerald-950/60 transition" title="Reply via Email" onclick="markStatus(<?= $msg['id'] ?>, 'replied')">
                                                <i class="fa-solid fa-reply"></i>
                                            </a>
                                            <!-- Delete Button -->
                                            <button onclick="deleteMessage(<?= $msg['id'] ?>)" class="p-1.5 rounded-lg text-rose-400 hover:bg-rose-950/60 transition" title="Delete Inquiry">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <!-- TAB 2: LOG CENTER (mail_error.log & contact_submissions.log) -->
        <section id="tab-logs" class="tab-content hidden space-y-6">
            
            <div class="flex flex-wrap items-center justify-between gap-4 p-4 rounded-2xl glass-card border border-slate-800">
                <div>
                    <h3 class="text-sm font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-database text-indigo-400"></i>
                        Log Synchronization & File Storage
                    </h3>
                    <p class="text-xs text-slate-400 mt-0.5">
                        Controls: <code class="text-emerald-300">logs/contact_submissions.log</code>, <code class="text-rose-300">logs/mail_error.log</code>, and MySQL table <code class="text-purple-300">mail_logs</code>.
                    </p>
                </div>
                <button onclick="resyncLogs()" class="px-4 py-2 rounded-xl bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white font-bold text-xs shadow-lg transition flex items-center gap-1.5">
                    <i class="fa-solid fa-rotate"></i>
                    <span>Re-sync File Logs to MySQL Database</span>
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                
                <!-- Box 1: contact_submissions.log -->
                <div class="glass-card rounded-2xl border border-slate-800 p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-400 flex items-center gap-2">
                                <i class="fa-solid fa-file-circle-check"></i>
                                logs/contact_submissions.log
                            </h4>
                            <div class="flex items-center gap-2">
                                <a href="api.php?action=download_log&file=contact_submissions.log" class="text-[11px] text-slate-400 hover:text-white flex items-center gap-1">
                                    <i class="fa-solid fa-download"></i> Download
                                </a>
                                <button onclick="clearLogFile('contact_submissions')" class="text-[11px] text-rose-400 hover:text-rose-300 flex items-center gap-1">
                                    <i class="fa-solid fa-trash"></i> Clear
                                </button>
                            </div>
                        </div>
                        <div class="font-mono text-[11px] bg-slate-950 p-4 rounded-xl border border-slate-900 text-slate-300 max-h-96 overflow-y-auto whitespace-pre leading-relaxed">
<?= htmlspecialchars($rawContactLog) ?>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-3">Raw file mirror of visitor contact transmissions.</p>
                </div>

                <!-- Box 2: mail_error.log -->
                <div class="glass-card rounded-2xl border border-slate-800 p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                            <h4 class="text-xs font-bold uppercase tracking-wider text-rose-400 flex items-center gap-2">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                                logs/mail_error.log
                            </h4>
                            <div class="flex items-center gap-2">
                                <a href="api.php?action=download_log&file=mail_error.log" class="text-[11px] text-slate-400 hover:text-white flex items-center gap-1">
                                    <i class="fa-solid fa-download"></i> Download
                                </a>
                                <button onclick="clearLogFile('mail_error')" class="text-[11px] text-rose-400 hover:text-rose-300 flex items-center gap-1">
                                    <i class="fa-solid fa-trash"></i> Clear
                                </button>
                            </div>
                        </div>
                        <div class="font-mono text-[11px] bg-slate-950 p-4 rounded-xl border border-slate-900 text-slate-300 max-h-96 overflow-y-auto whitespace-pre leading-relaxed">
<?= htmlspecialchars($rawMailErrorLog) ?>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-3">Records any PHPMailer or SMTP dispatch exceptions.</p>
                </div>

            </div>

            <!-- Database Table View: mail_logs -->
            <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
                <div class="p-4 border-b border-slate-800 flex items-center justify-between bg-slate-900/60">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white flex items-center gap-2">
                        <i class="fa-solid fa-table text-purple-400"></i>
                        MySQL `mail_logs` Table (Database View)
                    </h4>
                    <span class="text-[11px] text-slate-400 font-mono"><?= count($mailLogs) ?> events recorded</span>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs">
                        <thead class="bg-slate-900/40 text-slate-400 font-bold border-b border-slate-800 text-[11px]">
                            <tr>
                                <th class="py-3 px-4">#</th>
                                <th class="py-3 px-4">Type</th>
                                <th class="py-3 px-4">Recipient</th>
                                <th class="py-3 px-4">Subject</th>
                                <th class="py-3 px-4">Error / Message</th>
                                <th class="py-3 px-4">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            <?php if (empty($mailLogs)): ?>
                                <tr>
                                    <td colspan="6" class="py-6 text-center text-slate-500">No mail events recorded in database yet.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($mailLogs as $ml): ?>
                                    <tr class="hover:bg-slate-800/30">
                                        <td class="py-2.5 px-4 font-mono text-slate-500"><?= $ml['id'] ?></td>
                                        <td class="py-2.5 px-4">
                                            <?php if ($ml['log_type'] === 'error'): ?>
                                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-rose-500/20 text-rose-300 border border-rose-500/30">ERROR</span>
                                            <?php else: ?>
                                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">SUCCESS</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="py-2.5 px-4 font-mono text-slate-300"><?= htmlspecialchars($ml['recipient']) ?></td>
                                        <td class="py-2.5 px-4 text-slate-300"><?= htmlspecialchars($ml['subject'] ?? '-') ?></td>
                                        <td class="py-2.5 px-4 font-mono text-slate-400 max-w-sm truncate"><?= htmlspecialchars($ml['error_message'] ?? 'None (Delivered)') ?></td>
                                        <td class="py-2.5 px-4 font-mono text-[11px] text-slate-400"><?= htmlspecialchars($ml['logged_at']) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <!-- TAB 3: NEWSLETTER SUBSCRIBERS -->
        <section id="tab-subscribers" class="tab-content hidden space-y-4">
            
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="text-sm font-bold text-white">Newsletter Audience</h3>
                    <p class="text-xs text-slate-400">Total <?= count($subscribers) ?> subscribers signed up for engineering updates.</p>
                </div>
                <button onclick="exportSubscribersCsv()" class="px-4 py-2 rounded-xl border border-slate-700 glass-card text-xs font-bold text-white hover:border-emerald-500 transition flex items-center gap-2">
                    <i class="fa-solid fa-file-csv text-emerald-400"></i>
                    <span>Export CSV</span>
                </button>
            </div>

            <div class="glass-card rounded-2xl border border-slate-800 overflow-hidden shadow-xl">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs" id="subscribersTable">
                        <thead class="bg-slate-900/80 uppercase tracking-wider text-slate-400 font-bold border-b border-slate-800 text-[11px]">
                            <tr>
                                <th class="py-3.5 px-4">#</th>
                                <th class="py-3.5 px-4">Subscriber Email</th>
                                <th class="py-3.5 px-4">Source Channel</th>
                                <th class="py-3.5 px-4">IP Address</th>
                                <th class="py-3.5 px-4">Subscribed Date</th>
                                <th class="py-3.5 px-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            <?php if (empty($subscribers)): ?>
                                <tr>
                                    <td colspan="6" class="py-8 text-center text-slate-500">No subscribers yet.</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($subscribers as $s): ?>
                                    <tr class="hover:bg-slate-800/40 transition" id="sub-row-<?= $s['id'] ?>">
                                        <td class="py-3 px-4 font-mono text-slate-500"><?= $s['id'] ?></td>
                                        <td class="py-3 px-4 font-bold text-white">
                                            <a href="mailto:<?= htmlspecialchars($s['email']) ?>" class="hover:underline text-emerald-400"><?= htmlspecialchars($s['email']) ?></a>
                                        </td>
                                        <td class="py-3 px-4 text-slate-300"><?= htmlspecialchars($s['source']) ?></td>
                                        <td class="py-3 px-4 font-mono text-slate-400"><?= htmlspecialchars($s['ip_address'] ?? 'Unknown') ?></td>
                                        <td class="py-3 px-4 font-mono text-[11px] text-slate-400"><?= htmlspecialchars($s['subscribed_at']) ?></td>
                                        <td class="py-3 px-4 text-right">
                                            <button onclick="deleteSubscriber(<?= $s['id'] ?>)" class="p-1.5 rounded-lg text-rose-400 hover:bg-rose-950/60 transition" title="Delete Subscriber">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

        <!-- TAB 4: SMTP & WEBSITE SETTINGS -->
        <section id="tab-settings" class="tab-content hidden space-y-6">
            
            <form onsubmit="handleSettingsSave(event)" class="space-y-6">
                
                <!-- SMTP Email Configuration Card -->
                <div class="glass-card rounded-2xl border border-slate-800 p-6 space-y-5">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                        <div>
                            <h3 class="text-sm font-bold text-white flex items-center gap-2">
                                <i class="fa-solid fa-envelope text-purple-400"></i>
                                SMTP Email Dispatch Settings
                            </h3>
                            <p class="text-xs text-slate-400 mt-0.5">Control live email delivery credentials used by PHPMailer.</p>
                        </div>
                        <a href="../pages/test_mail.php" target="_blank" class="px-3.5 py-1.5 rounded-xl bg-purple-950/60 border border-purple-500/40 text-purple-300 hover:text-white text-xs font-bold transition flex items-center gap-1.5">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>Test SMTP Live</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">SMTP Host</label>
                            <input type="text" name="smtp_host" value="<?= htmlspecialchars($settingsRows['smtp_host'] ?? 'smtp.gmail.com') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">SMTP Port</label>
                            <input type="number" name="smtp_port" value="<?= htmlspecialchars($settingsRows['smtp_port'] ?? '587') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Encryption (TLS / SSL)</label>
                            <select name="smtp_secure" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                                <option value="tls" <?= ($settingsRows['smtp_secure'] ?? '') === 'tls' ? 'selected' : '' ?>>TLS (Port 587)</option>
                                <option value="ssl" <?= ($settingsRows['smtp_secure'] ?? '') === 'ssl' ? 'selected' : '' ?>>SSL (Port 465)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">SMTP Username (Gmail Address)</label>
                            <input type="email" name="smtp_user" value="<?= htmlspecialchars($settingsRows['smtp_user'] ?? 'sudipanmandal@gmail.com') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">SMTP App Password</label>
                            <input type="password" name="smtp_pass" placeholder="Enter new password to update" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                            <span class="text-[10px] text-slate-500 mt-1 block">Leave empty to keep existing password</span>
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Recipient (Your Email)</label>
                            <input type="email" name="mail_to" value="<?= htmlspecialchars($settingsRows['mail_to'] ?? 'sudipanmandal@gmail.com') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                    </div>
                </div>

                <!-- Website Profile Settings Card -->
                <div class="glass-card rounded-2xl border border-slate-800 p-6 space-y-5">
                    <h3 class="text-sm font-bold text-white flex items-center gap-2 pb-4 border-b border-slate-800">
                        <i class="fa-solid fa-address-card text-emerald-400"></i>
                        General Website & Contact Information
                    </h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Portfolio Title</label>
                            <input type="text" name="site_title" value="<?= htmlspecialchars($settingsRows['site_title'] ?? 'Sudipan Mandal | Portfolio') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Public Contact Email</label>
                            <input type="email" name="contact_email" value="<?= htmlspecialchars($settingsRows['contact_email'] ?? 'sudipanmandal@gmail.com') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Phone Number</label>
                            <input type="text" name="phone" value="<?= htmlspecialchars($settingsRows['phone'] ?? '+91 97486 42879') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Location</label>
                            <input type="text" name="location" value="<?= htmlspecialchars($settingsRows['location'] ?? 'Kolkata, West Bengal, India') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">GitHub Profile URL</label>
                            <input type="url" name="github_url" value="<?= htmlspecialchars($settingsRows['github_url'] ?? 'https://github.com/sudipan-dev-sr') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                        <div>
                            <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">LinkedIn Profile URL</label>
                            <input type="url" name="linkedin_url" value="<?= htmlspecialchars($settingsRows['linkedin_url'] ?? 'https://linkedin.com/in/sudipan-mandal') ?>" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-800 flex justify-end">
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-gradient-to-r from-purple-600 via-indigo-600 to-emerald-500 hover:from-purple-500 hover:to-emerald-400 text-white font-bold text-xs shadow-lg transition flex items-center gap-2">
                            <i class="fa-solid fa-floppy-disk"></i>
                            <span>Save & Apply Settings</span>
                        </button>
                    </div>
                </div>

            </form>

        </section>

        <!-- TAB 5: SECURITY / PASSWORD -->
        <section id="tab-security" class="tab-content hidden space-y-6">
            
            <div class="max-w-xl glass-card rounded-2xl border border-slate-800 p-6 space-y-5">
                <div class="pb-4 border-b border-slate-800">
                    <h3 class="text-sm font-bold text-white flex items-center gap-2">
                        <i class="fa-solid fa-key text-purple-400"></i>
                        Change Admin Access Password
                    </h3>
                    <p class="text-xs text-slate-400 mt-0.5">Ensure your administrator account uses a strong, private password.</p>
                </div>

                <form onsubmit="handlePasswordChange(event)" class="space-y-4">
                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Current Password</label>
                        <input type="password" id="current_password" required class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">New Password (min 8 characters)</label>
                        <input type="password" id="new_password" required minlength="8" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                    </div>

                    <div>
                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-400 mb-1.5">Confirm New Password</label>
                        <input type="password" id="confirm_password" required minlength="8" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:border-purple-500 outline-none">
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="px-6 py-2.5 rounded-xl bg-purple-600 hover:bg-purple-500 text-white font-bold text-xs shadow-lg transition flex items-center gap-2">
                            <i class="fa-solid fa-lock"></i>
                            <span>Update Password</span>
                        </button>
                    </div>
                </form>
            </div>

        </section>

    </main>

    <!-- Message Details Modal -->
    <div id="messageModal" class="hidden fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="glass-card rounded-3xl max-w-lg w-full p-6 border border-slate-700 shadow-2xl space-y-4 animate-fadeIn">
            
            <div class="flex items-center justify-between pb-3 border-b border-slate-800">
                <span class="px-3 py-1 rounded-full text-[10px] font-bold bg-purple-500/20 text-purple-300 border border-purple-500/30">
                    Inquiry Details
                </span>
                <button onclick="closeMessageModal()" class="text-slate-400 hover:text-white transition">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>
            </div>

            <div class="space-y-3 text-xs">
                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Sender</span>
                    <h3 id="modalName" class="text-sm font-bold text-white"></h3>
                    <a id="modalEmail" href="#" class="text-purple-400 hover:underline"></a>
                </div>

                <div class="grid grid-cols-2 gap-2 text-[11px]">
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">Sent Date</span>
                        <span id="modalDate" class="text-slate-300 font-mono"></span>
                    </div>
                    <div>
                        <span class="text-[10px] uppercase font-bold text-slate-400 block">IP Address</span>
                        <span id="modalIp" class="text-slate-300 font-mono"></span>
                    </div>
                </div>

                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block">Subject / Topic</span>
                    <div id="modalSubject" class="font-semibold text-emerald-400 text-xs"></div>
                </div>

                <div>
                    <span class="text-[10px] uppercase font-bold text-slate-400 block mb-1">Full Message</span>
                    <div id="modalBody" class="p-3.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-200 text-xs leading-relaxed whitespace-pre-line max-h-60 overflow-y-auto"></div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-800 flex items-center justify-between gap-3">
                <div class="flex items-center gap-1.5">
                    <button id="modalBtnRead" onclick="markModalStatus('read')" class="px-3 py-1.5 rounded-lg bg-slate-800 hover:bg-slate-700 text-[11px] font-semibold text-slate-300 transition">Mark Read</button>
                    <button id="modalBtnReplied" onclick="markModalStatus('replied')" class="px-3 py-1.5 rounded-lg bg-emerald-950/60 border border-emerald-500/40 hover:bg-emerald-900/60 text-[11px] font-semibold text-emerald-300 transition">Mark Replied</button>
                </div>
                <a id="modalReplyBtn" href="#" class="px-4 py-1.5 rounded-xl bg-purple-600 hover:bg-purple-500 text-white text-xs font-bold transition flex items-center gap-1.5 shadow-md">
                    <i class="fa-solid fa-reply"></i>
                    <span>Reply via Email</span>
                </a>
            </div>

        </div>
    </div>

    <script>
        let currentModalMsgId = null;

        // Tab Switcher
        function switchTab(tabId) {
            document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));

            event.currentTarget.classList.add('active');
            const target = document.getElementById('tab-' + tabId);
            if (target) target.classList.remove('hidden');
        }

        // Toast Notification
        function showToast(msg, isSuccess = true) {
            const toast = document.getElementById('toastAlert');
            const icon = document.getElementById('toastIcon');
            const text = document.getElementById('toastMsg');

            text.textContent = msg;
            toast.className = isSuccess 
                ? 'fixed bottom-6 right-6 z-50 p-4 rounded-2xl glass-card border border-emerald-500/40 text-emerald-300 text-xs sm:text-sm font-semibold shadow-2xl flex items-center gap-3 block animate-fadeIn'
                : 'fixed bottom-6 right-6 z-50 p-4 rounded-2xl glass-card border border-rose-500/40 text-rose-300 text-xs sm:text-sm font-semibold shadow-2xl flex items-center gap-3 block animate-fadeIn';
            
            icon.className = isSuccess ? 'fa-solid fa-circle-check text-emerald-400 text-base' : 'fa-solid fa-circle-exclamation text-rose-400 text-base';

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 4000);
        }

        // Filter inquiries
        function filterInquiries(status, btn) {
            document.querySelectorAll('.filter-pill').forEach(p => {
                p.classList.remove('bg-purple-600', 'text-white');
                p.classList.add('bg-slate-800', 'text-slate-400');
            });
            btn.classList.remove('bg-slate-800', 'text-slate-400');
            btn.classList.add('bg-purple-600', 'text-white');

            const rows = document.querySelectorAll('.inquiry-row');
            rows.forEach(r => {
                if (status === 'all' || r.getAttribute('data-status') === status) {
                    r.style.display = '';
                } else {
                    r.style.display = 'none';
                }
            });
        }

        // Search inquiries
        function searchInquiries() {
            const query = document.getElementById('inquirySearch').value.toLowerCase();
            const rows = document.querySelectorAll('.inquiry-row');
            rows.forEach(r => {
                const text = r.textContent.toLowerCase();
                r.style.display = text.includes(query) ? '' : 'none';
            });
        }

        // Message Modal
        function openMessageModal(msg) {
            currentModalMsgId = msg.id;
            document.getElementById('modalName').textContent = msg.name;
            const mailLink = document.getElementById('modalEmail');
            mailLink.textContent = msg.email;
            mailLink.href = 'mailto:' + msg.email;
            document.getElementById('modalDate').textContent = msg.created_at;
            document.getElementById('modalIp').textContent = msg.ip_address || 'Unknown';
            document.getElementById('modalSubject').textContent = msg.subject;
            document.getElementById('modalBody').textContent = msg.message;

            const replyBtn = document.getElementById('modalReplyBtn');
            replyBtn.href = 'mailto:' + msg.email + '?subject=' + encodeURIComponent('Re: ' + msg.subject);

            // Auto-mark as read if new
            if (msg.status === 'new') {
                markStatus(msg.id, 'read');
            }

            document.getElementById('messageModal').classList.remove('hidden');
        }

        function closeMessageModal() {
            document.getElementById('messageModal').classList.add('hidden');
        }

        function markModalStatus(status) {
            if (currentModalMsgId) {
                markStatus(currentModalMsgId, status);
                closeMessageModal();
            }
        }

        // AJAX: Mark Inquiry Status
        async function markStatus(id, status) {
            const fd = new FormData();
            fd.append('action', 'update_status');
            fd.append('id', id);
            fd.append('status', status);

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                if (json.success) {
                    const row = document.getElementById('row-' + id);
                    if (row) row.setAttribute('data-status', status);

                    const badge = document.getElementById('badge-' + id);
                    if (badge) {
                        if (status === 'new') badge.innerHTML = '<span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">NEW</span>';
                        else if (status === 'replied') badge.innerHTML = '<span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">REPLIED</span>';
                        else badge.innerHTML = '<span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-slate-700/60 text-slate-300">READ</span>';
                    }
                    showToast(json.message);
                }
            } catch (e) {
                showToast('Failed to update status', false);
            }
        }

        // AJAX: Delete Inquiry
        async function deleteMessage(id) {
            if (!confirm('Are you sure you want to permanently delete this contact inquiry?')) return;

            const fd = new FormData();
            fd.append('action', 'delete_message');
            fd.append('id', id);

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                if (json.success) {
                    const row = document.getElementById('row-' + id);
                    if (row) row.remove();
                    showToast(json.message);
                }
            } catch (e) {
                showToast('Failed to delete inquiry', false);
            }
        }

        // AJAX: Delete Subscriber
        async function deleteSubscriber(id) {
            if (!confirm('Are you sure you want to remove this subscriber?')) return;

            const fd = new FormData();
            fd.append('action', 'delete_subscriber');
            fd.append('id', id);

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                if (json.success) {
                    const row = document.getElementById('sub-row-' + id);
                    if (row) row.remove();
                    showToast(json.message);
                }
            } catch (e) {
                showToast('Failed to delete subscriber', false);
            }
        }

        // AJAX: Save Settings
        async function handleSettingsSave(e) {
            e.preventDefault();
            const form = e.target;
            const fd = new FormData(form);
            fd.append('action', 'save_settings');

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                showToast(json.message, json.success);
            } catch (err) {
                showToast('Network error while saving settings', false);
            }
        }

        // AJAX: Change Password
        async function handlePasswordChange(e) {
            e.preventDefault();
            const currentPass = document.getElementById('current_password').value;
            const newPass = document.getElementById('new_password').value;
            const confirmPass = document.getElementById('confirm_password').value;

            const fd = new FormData();
            fd.append('action', 'change_password');
            fd.append('current_password', currentPass);
            fd.append('new_password', newPass);
            fd.append('confirm_password', confirmPass);

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                showToast(json.message, json.success);
                if (json.success) {
                    e.target.reset();
                }
            } catch (err) {
                showToast('Error changing password', false);
            }
        }

        // AJAX: Clear Logs
        async function clearLogFile(type) {
            if (!confirm(`Are you sure you want to clear the ${type}.log file?`)) return;

            const fd = new FormData();
            fd.append('action', 'clear_logs');
            fd.append('log_type', type);

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                showToast(json.message, json.success);
                setTimeout(() => location.reload(), 1000);
            } catch (err) {
                showToast('Failed to clear log', false);
            }
        }

        // AJAX: Re-sync Logs
        async function resyncLogs() {
            const fd = new FormData();
            fd.append('action', 'resync_logs');

            try {
                const res = await fetch('api.php', { method: 'POST', body: fd });
                const json = await res.json();
                showToast(json.message, json.success);
                setTimeout(() => location.reload(), 1500);
            } catch (err) {
                showToast('Failed to resync logs', false);
            }
        }

        // Export Subscribers CSV
        function exportSubscribersCsv() {
            let csv = "ID,Email,Source Channel,IP Address,Subscribed Date\n";
            document.querySelectorAll('#subscribersTable tbody tr').forEach(tr => {
                const cols = tr.querySelectorAll('td');
                if (cols.length >= 5) {
                    const id = cols[0].textContent.trim();
                    const email = cols[1].textContent.trim();
                    const source = cols[2].textContent.trim();
                    const ip = cols[3].textContent.trim();
                    const date = cols[4].textContent.trim();
                    csv += `"${id}","${email}","${source}","${ip}","${date}"\n`;
                }
            });

            const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.setAttribute("download", "newsletter_subscribers_" + new Date().toISOString().slice(0,10) + ".csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>
</html>
