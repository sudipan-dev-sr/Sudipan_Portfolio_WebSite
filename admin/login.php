<?php
/**
 * Admin Login Portal - Sudipan Mandal Portfolio
 */

require_once __DIR__ . '/auth.php';

// If already logged in, redirect to dashboard
if (isAdminLoggedIn()) {
    header("Location: index.php");
    exit;
}

$error = '';
$usernameInput = '';

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
    $usernameInput = trim($_POST['username'] ?? '');
    $passwordInput = trim($_POST['password'] ?? '');

    if (empty($usernameInput) || empty($passwordInput)) {
        $error = 'Please enter both username and password.';
    } else {
        $pdo = getDbConnection();
        if (!$pdo) {
            $error = 'Database connection failed. Please check MySQL status and verify credentials in .env (DB_HOST, DB_NAME, DB_USER, DB_PASS).';
        } else {
            try {
                $stmt = $pdo->prepare("SELECT * FROM `admin_users` WHERE `username` = ? OR `email` = ? LIMIT 1");
                $stmt->execute([$usernameInput, $usernameInput]);
                $user = $stmt->fetch();

                if ($user && password_verify($passwordInput, $user['password_hash'])) {
                    // Successful login
                    session_regenerate_id(true);
                    $_SESSION['admin_logged_in'] = true;
                    $_SESSION['admin_user_id']   = $user['id'];
                    $_SESSION['admin_username']  = $user['username'];
                    $_SESSION['admin_email']     = $user['email'];

                    header("Location: index.php");
                    exit;
                } else {
                    $error = 'Invalid username/email or password. Please try again.';
                }
            } catch (PDOException $e) {
                $error = 'Authentication query error: ' . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login &bull; Sudipan Mandal Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b0f17;
            background-image: 
                radial-gradient(at 0% 0%, rgba(99, 102, 241, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(16, 185, 129, 0.15) 0px, transparent 50%);
        }
        .glass-card {
            background: rgba(17, 24, 39, 0.75);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 text-slate-100">

    <div class="w-full max-w-md">
        
        <!-- Brand Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-purple-600 via-indigo-500 to-emerald-400 flex items-center justify-center mx-auto mb-4 shadow-xl shadow-purple-500/20">
                <i class="fa-solid fa-shield-halved text-2xl text-white"></i>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-white">Admin Control Center</h1>
            <p class="text-xs text-slate-400 mt-1">Sudipan Mandal &bull; Portfolio Management</p>
        </div>

        <!-- Login Card -->
        <div class="glass-card rounded-3xl p-8 shadow-2xl">
            
            <?php if (!empty($error)): ?>
                <div class="mb-6 p-4 rounded-xl bg-red-950/60 border border-red-500/40 text-red-300 text-xs font-semibold flex items-center gap-3 animate-pulse">
                    <i class="fa-solid fa-circle-exclamation text-base text-red-400 flex-shrink-0"></i>
                    <span><?= htmlspecialchars($error) ?></span>
                </div>
            <?php endif; ?>

            <form method="POST" action="login.php" class="space-y-5">
                
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                        Username or Email
                    </label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-regular fa-user text-sm"></i>
                        </span>
                        <input type="text" 
                               name="username" 
                               required 
                               autofocus
                               value="<?= htmlspecialchars($usernameInput) ?>"
                               placeholder="admin or sudipanmandal@gmail.com" 
                               class="w-full pl-10 pr-4 py-3 rounded-xl bg-slate-900/80 border border-slate-700/80 text-sm text-white placeholder-slate-500 outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                            Password
                        </label>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                            <i class="fa-solid fa-lock text-sm"></i>
                        </span>
                        <input type="password" 
                               id="passwordInput"
                               name="password" 
                               required 
                               placeholder="••••••••••••" 
                               class="w-full pl-10 pr-11 py-3 rounded-xl bg-slate-900/80 border border-slate-700/80 text-sm text-white placeholder-slate-500 outline-none focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition">
                        <button type="button" 
                                onclick="togglePasswordVisibility()" 
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-white transition">
                            <i id="eyeIcon" class="fa-regular fa-eye text-sm"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" 
                        class="w-full py-3.5 px-4 rounded-xl bg-gradient-to-r from-purple-600 via-indigo-600 to-emerald-500 hover:from-purple-500 hover:to-emerald-400 text-white font-bold text-sm tracking-wide shadow-lg shadow-purple-500/25 transition duration-200 flex items-center justify-center gap-2 mt-6">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Authenticate & Access Dashboard</span>
                </button>
            </form>

            <!-- Initial Credentials Hint for First Login -->
            <div class="mt-6 pt-5 border-t border-slate-800 text-center">
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-indigo-950/40 border border-indigo-500/30 text-[11px] text-indigo-300">
                    <i class="fa-solid fa-key"></i>
                    <span>Default: <strong>admin</strong> / <strong>Admin@2026#Sudipan</strong></span>
                </div>
            </div>

        </div>

        <!-- Back to Website Link -->
        <div class="mt-6 text-center">
            <a href="../index.php" class="text-xs text-slate-400 hover:text-white transition inline-flex items-center gap-1.5">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Return to Public Website</span>
            </a>
        </div>

    </div>

    <script>
        function togglePasswordVisibility() {
            const pass = document.getElementById('passwordInput');
            const icon = document.getElementById('eyeIcon');
            if (pass.type === 'password') {
                pass.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                pass.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>
