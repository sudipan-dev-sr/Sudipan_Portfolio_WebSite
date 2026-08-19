<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= DEDICATED ABOUT PAGE ================= -->
<main class="pt-32 pb-20 px-5 sm:px-8 lg:px-[8%] min-h-screen">
    <div class="max-w-6xl mx-auto">

        <!-- Breadcrumb / Back Link -->
        <div class="mb-8">
            <a href="<?= BASE_URL ?>" class="inline-flex items-center gap-2 text-xs font-semibold text-purple-600 dark:text-purple-400 hover:underline">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Home Portfolio
            </a>
        </div>

        <div class="text-center mb-16">
            <span class="gradient-badge mb-2">Detailed Profile</span>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                About <span class="gradient-text">Sudipan Mandal</span>
            </h1>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">
                Full Stack PHP Developer specializing in enterprise backend architecture, RESTful API design, and AI-enabled software solutions.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-20">
            <!-- Left Avatar -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="glass-card p-4 rounded-3xl relative max-w-sm group">
                    <img src="<?= BASE_URL ?>assets/user-image.png" 
                         alt="Sudipan Mandal" 
                         class="w-full h-auto rounded-2xl object-cover" />
                    
                    <div class="mt-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700">
                        <div class="flex items-center justify-between text-xs font-bold text-slate-700 dark:text-slate-200">
                            <span>Status:</span>
                            <span class="text-emerald-500 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                Active PHP Developer
                            </span>
                        </div>
                        <div class="flex items-center justify-between text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">
                            <span>Organization:</span>
                            <span class="text-slate-900 dark:text-white font-semibold">Vxplore Technologies</span>
                        </div>
                        <div class="flex items-center justify-between text-xs font-medium text-slate-500 dark:text-slate-400 mt-1">
                            <span>Location:</span>
                            <span>Kolkata, West Bengal</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Engineering Philosophy & Mindset
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed mb-4">
                        I am a Full Stack PHP Developer with hands-on enterprise experience in backend systems, database performance, and application support. 
                        My focus is on writing clean, modular, and maintainable code that delivers measurable business value.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                        With solid foundations in <strong>PHP, CodeIgniter 4, Laravel, and MySQL</strong>, I build structured MVC solutions, integrate modern AI capabilities (OpenAI API), and craft responsive, intuitive interfaces using <strong>JavaScript, React, Tailwind CSS, and Bootstrap</strong>.
                    </p>
                </div>

                <!-- 3 Pillars Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <i class="fa-solid fa-code text-purple-600 dark:text-purple-400 text-xl mb-2"></i>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Languages</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">PHP 8, JavaScript (ES6+), Python, HTML5, CSS3</p>
                    </div>

                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <i class="fa-solid fa-graduation-cap text-indigo-600 dark:text-indigo-400 text-xl mb-2"></i>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Education</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">BCA from MAKAUT (2021–2024, CGPA 7.27)</p>
                    </div>

                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800">
                        <i class="fa-solid fa-laptop-code text-amber-500 text-xl mb-2"></i>
                        <h3 class="font-bold text-slate-900 dark:text-white text-sm">Projects</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">5+ Production and AI-Powered Applications</p>
                    </div>
                </div>

                <!-- Tools & Ecosystem -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-3">
                        Core Development Tools
                    </h3>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-brands fa-git-alt text-orange-500 text-base"></i> Git & GitHub
                        </span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-terminal text-blue-500 text-base"></i> VS Code
                        </span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-paper-plane text-orange-400 text-base"></i> Postman
                        </span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-server text-yellow-500 text-base"></i> XAMPP / Apache
                        </span>
                        <span class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-brands fa-figma text-pink-500 text-base"></i> Figma
                        </span>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="<?= BASE_URL ?>#contact" class="btn-primary">
                        <span>Get in Touch</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                    <a href="<?= BASE_URL ?>assets/Resume/Sudipan_Mandal_FullStack_PHP_Developer_CV.pdf" target="_blank" class="btn-outline">
                        <i class="fa-solid fa-file-pdf text-purple-600"></i>
                        <span>Download Complete CV</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

