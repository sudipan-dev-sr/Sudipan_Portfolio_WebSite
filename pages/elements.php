<?php
$pageTitle = "UI & Engineering Design System Elements | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= ELEMENTS HERO ================= -->
<section class="relative pt-32 pb-16 px-5 sm:px-8 lg:px-[8%] overflow-hidden">
    <!-- Ambient Background Glows -->
    <div class="ambient-glow -top-20 -left-20 bg-indigo-500/20"></div>
    <div class="ambient-glow top-40 -right-20 bg-purple-500/15"></div>

    <div class="max-w-5xl mx-auto text-center relative z-10">
        <!-- Breadcrumb -->
        <nav class="reveal flex items-center justify-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400 mb-6">
            <a href="<?= BASE_URL ?>" class="hover:text-purple-600 dark:hover:text-purple-400 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <span class="text-purple-600 dark:text-purple-400">UI Elements</span>
        </nav>

        <span class="gradient-badge mb-4">Design System & Components</span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            Design Tokens & <span class="gradient-text">UI Playground</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
            The foundational UI kit and interactive elements powering this portfolio: glassmorphism, animated buttons, badge tags, and modern input controls.
        </p>
    </div>
</section>

<!-- ================= PLAYGROUND SECTIONS ================= -->
<section class="py-12 px-5 sm:px-8 lg:px-[8%] space-y-16">
    <div class="max-w-5xl mx-auto space-y-16">

        <!-- 1. BUTTONS & CTAS -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 space-y-6">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">01. Buttons & Call-to-Actions</h3>
                <p class="text-xs text-slate-500">Variants used across hero banners, forms, and interaction triggers.</p>
            </div>
            
            <div class="flex flex-wrap items-center gap-4 pt-2">
                <button type="button" class="btn-primary text-xs">
                    <span>Primary Action</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </button>
                <button type="button" class="btn-outline text-xs">
                    <i class="fa-solid fa-code text-purple-500"></i>
                    <span>Outline Glass</span>
                </button>
                <span class="px-4 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-gradient-to-r from-emerald-600 to-teal-600 shadow-md shadow-emerald-500/20">
                    Emerald Gradient
                </span>
                <span class="px-4 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-gradient-to-r from-amber-500 to-orange-500 shadow-md shadow-amber-500/20">
                    Amber Glow
                </span>
            </div>
        </div>

        <!-- 2. STATUS BADGES & TECH PILLS -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 space-y-6">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">02. Status Badges & Tech Pills</h3>
                <p class="text-xs text-slate-500">Dynamic indicators for active roles, projects, and technologies.</p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-400 border border-emerald-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                    Active Production Role
                </span>
                <span class="px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300">
                    Completed Role
                </span>
                <span class="gradient-badge">
                    Gradient Badge Token
                </span>
                <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5 text-xs font-medium text-slate-700 dark:text-slate-300">
                    <i class="fa-brands fa-node-js text-emerald-500"></i> Node.js
                </span>
                <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5 text-xs font-medium text-slate-700 dark:text-slate-300">
                    <i class="fa-solid fa-cube text-indigo-500"></i> Strapi
                </span>
                <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5 text-xs font-medium text-slate-700 dark:text-slate-300">
                    <i class="fa-solid fa-database text-sky-500"></i> PostgreSQL
                </span>
            </div>
        </div>

        <!-- 3. GLASSMORPHIC CARDS & METRICS -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 space-y-6">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">03. Glassmorphic Cards & Metric Rings</h3>
                <p class="text-xs text-slate-500">Backdrop-filtered glass surfaces with hover gradient borders.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover text-center">
                    <span class="text-3xl font-extrabold text-purple-600 dark:text-purple-400">90%</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">PHP & Backend</h4>
                    <p class="text-xs text-slate-500 mt-1">Core & OOP Proficiency</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover text-center">
                    <span class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400">&lt;100ms</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">Database Queries</h4>
                    <p class="text-xs text-slate-500 mt-1">Indexed & Optimized</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover text-center">
                    <span class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">100%</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">Type Safety</h4>
                    <p class="text-xs text-slate-500 mt-1">TypeScript API Schemas</p>
                </div>
            </div>
        </div>

        <!-- 4. ALERT CALLOUT BANNERS -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 space-y-4">
            <div>
                <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">04. Alert Callout Banners</h3>
                <p class="text-xs text-slate-500">System alert boxes for notifications, successes, and warnings.</p>
            </div>

            <div class="space-y-3">
                <div class="p-4 rounded-2xl bg-emerald-100/80 dark:bg-emerald-950/40 border border-emerald-500/30 text-emerald-800 dark:text-emerald-300 text-xs flex items-center gap-3">
                    <i class="fa-solid fa-circle-check text-base"></i>
                    <span><strong>Success Banner:</strong> Verified and deployed to production environment.</span>
                </div>
                <div class="p-4 rounded-2xl bg-indigo-100/80 dark:bg-indigo-950/40 border border-indigo-500/30 text-indigo-800 dark:text-indigo-300 text-xs flex items-center gap-3">
                    <i class="fa-solid fa-circle-info text-base"></i>
                    <span><strong>Information Banner:</strong> Real-time GPS soil sampling stream is active.</span>
                </div>
                <div class="p-4 rounded-2xl bg-amber-100/80 dark:bg-amber-950/40 border border-amber-500/30 text-amber-800 dark:text-amber-300 text-xs flex items-center gap-3">
                    <i class="fa-solid fa-triangle-exclamation text-base"></i>
                    <span><strong>Notice Banner:</strong> Database index profiling in progress.</span>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
