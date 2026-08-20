<?php
$pageTitle = "Engineering Services | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= SERVICES HERO BANNER ================= -->
<section class="relative pt-32 pb-16 px-5 sm:px-8 lg:px-[8%] overflow-hidden">
    <!-- Ambient Background Glows -->
    <div class="ambient-glow -top-20 -left-20 bg-purple-500/20"></div>
    <div class="ambient-glow top-40 -right-20 bg-indigo-500/15"></div>

    <div class="max-w-5xl mx-auto text-center relative z-10">
        <!-- Breadcrumb -->
        <nav class="reveal flex items-center justify-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400 mb-6">
            <a href="<?= BASE_URL ?>" class="hover:text-purple-600 dark:hover:text-purple-400 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <span class="text-purple-600 dark:text-purple-400">Services</span>
        </nav>

        <span class="gradient-badge mb-4">Core Capabilities & Offerings</span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            Scalable Backend & <span class="gradient-text">Full-Stack Solutions</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
            From Headless CMS architectures and Climate-Tech MRV data platforms to type-safe Node.js / PHP backends and AI-augmented APIs.
        </p>

        <!-- Quick Stats Banner -->
        <div class="reveal mt-10 grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-4xl mx-auto">
            <div class="glass-card p-4 rounded-2xl border border-slate-200/80 dark:border-slate-800 text-center">
                <span class="text-2xl sm:text-3xl font-extrabold text-purple-600 dark:text-purple-400">100%</span>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">MVC & Clean Code</p>
            </div>
            <div class="glass-card p-4 rounded-2xl border border-slate-200/80 dark:border-slate-800 text-center">
                <span class="text-2xl sm:text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">&lt;100ms</span>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Optimized Latency</p>
            </div>
            <div class="glass-card p-4 rounded-2xl border border-slate-200/80 dark:border-slate-800 text-center">
                <span class="text-2xl sm:text-3xl font-extrabold text-emerald-600 dark:text-emerald-400">Type-Safe</span>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">TypeScript & Schemas</p>
            </div>
            <div class="glass-card p-4 rounded-2xl border border-slate-200/80 dark:border-slate-800 text-center">
                <span class="text-2xl sm:text-3xl font-extrabold text-amber-500">24/7</span>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Production Reliability</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= DETAILED SERVICES MATRIX ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-6xl mx-auto">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Service 1: Headless CMS & Strapi Architecture -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-indigo-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-cube"></i>
                    </div>
                    <span class="text-xs font-semibold text-indigo-600 dark:text-indigo-400 uppercase tracking-wider">Enterprise CMS</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        Headless CMS & Strapi Architecture
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        Architecting decoupled content engines with Strapi Headless CMS, custom schema controllers, role-based access control (RBAC), and high-throughput REST/GraphQL endpoints.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500 text-[11px]"></i> Custom Content Models & Relations</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500 text-[11px]"></i> Custom Controllers & Lifecycle Hooks</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500 text-[11px]"></i> JWT & API Token Authentication</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">Strapi, Node.js, TypeScript</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=Headless+CMS+Inquiry" class="text-indigo-600 dark:text-indigo-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

            <!-- Service 2: Full-Stack Web Development -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-purple-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <span class="text-xs font-semibold text-purple-600 dark:text-purple-400 uppercase tracking-wider">Web Engineering</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        Full-Stack Web Development
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        End-to-end web applications built strictly adhering to MVC architecture with PHP 8, CodeIgniter 4, Laravel, React, and Tailwind CSS for speed, elegance, and scale.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500 text-[11px]"></i> CodeIgniter 4 & Laravel Backends</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500 text-[11px]"></i> Dynamic Reactive Frontends (React / ES6)</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500 text-[11px]"></i> Modern Tailwind & Glassmorphism UI</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">PHP 8, CI4, Laravel, React</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=Web+App+Development" class="text-purple-600 dark:text-purple-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

            <!-- Service 3: Climate-Tech & MRV Platform Systems -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-emerald-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 uppercase tracking-wider">Climate Innovation</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        Climate-Tech & MRV Systems
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        Custom data ingestion and verification platforms for nature-based carbon removal, Enhanced Rock Weathering (ERW), and verifiable carbon credit quantification.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500 text-[11px]"></i> GPS / GIS Spatial Plot Ingestion</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500 text-[11px]"></i> Soil Chemistry & Weathering Calculations</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500 text-[11px]"></i> Audit-Ready Reporting Dashboards</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">Node.js, PostgreSQL, Strapi</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=Climate+Tech+MRV" class="text-emerald-600 dark:text-emerald-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

            <!-- Service 4: Relational Database Architecture -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-sky-100 dark:bg-sky-950/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-sky-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <span class="text-xs font-semibold text-sky-600 dark:text-sky-400 uppercase tracking-wider">Data Optimization</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        Relational Database Architecture
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        Designing robust PostgreSQL and MySQL database schemas, multi-table index optimization, slow-query elimination, foreign key constraints, and spatial tracking.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-sky-500 text-[11px]"></i> PostgreSQL Schema & Spatial Indexing</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-sky-500 text-[11px]"></i> MySQL Query Profiling & EXPLAIN Tuning</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-sky-500 text-[11px]"></i> High-Concurrency Transaction Integrity</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">PostgreSQL, MySQL, Redis</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=Database+Optimization" class="text-sky-600 dark:text-sky-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

            <!-- Service 5: AI & LLM Integration Services -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-amber-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 uppercase tracking-wider">AI Engineering</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        AI & OpenAI API Integration
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        Supercharging standard applications with intelligent LLM features: automated resume analysis, medical prescription parsing, dynamic content generation, and PDF reports.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500 text-[11px]"></i> OpenAI GPT-4 & Vision Integration</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500 text-[11px]"></i> Structured JSON Schema Output Enforcement</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500 text-[11px]"></i> Automated PDF Reporting with mPDF</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">OpenAI API, mPDF, JSON APIs</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=AI+Integration+Project" class="text-amber-600 dark:text-amber-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

            <!-- Service 6: RESTful APIs & Third-Party Integrations -->
            <div class="reveal glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between group">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-rose-100 dark:bg-rose-950/60 text-rose-600 dark:text-rose-400 flex items-center justify-center text-2xl mb-6 shadow-md shadow-rose-500/10 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <span class="text-xs font-semibold text-rose-600 dark:text-rose-400 uppercase tracking-wider">System Connectivity</span>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        RESTful APIs & Integrations
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
                        Building secure, versioned, and documented RESTful micro-endpoints. Seamlessly integrating payment gateways, CRM webhooks, and mobile client payloads.
                    </p>
                    <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-400 mb-6">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-rose-500 text-[11px]"></i> Stateless JWT & OAuth API Auth</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-rose-500 text-[11px]"></i> Webhooks & Asynchronous Queue Workers</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-rose-500 text-[11px]"></i> OpenAPI / Postman Test Suites</li>
                    </ul>
                </div>
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-medium text-slate-500">Postman, REST, JSON, Webhooks</span>
                    <a href="<?= BASE_URL ?>pages/contact.php?subject=API+Integration+Inquiry" class="text-rose-600 dark:text-rose-400 text-xs font-semibold hover:underline flex items-center gap-1">Inquire <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= INTERACTIVE PROJECT SCOPE ESTIMATOR ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] bg-slate-100/50 dark:bg-slate-900/30">
    <div class="max-w-4xl mx-auto glass-card p-8 sm:p-12 rounded-3xl border border-slate-200 dark:border-slate-800">
        
        <div class="text-center mb-8">
            <span class="gradient-badge mb-2">Interactive Tool</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">
                Interactive <span class="gradient-text">Project Scope Estimator</span>
            </h2>
            <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-2">
                Select your engineering requirements below to get a real-time architectural scope assessment.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Options Controls -->
            <div class="space-y-6">
                <!-- Project Type -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                        Architecture Type
                    </label>
                    <select id="calcType" onchange="calculateScope()" class="w-full px-4 py-3 rounded-xl glass-card border border-slate-200 dark:border-slate-700 text-sm text-slate-800 dark:text-slate-200 outline-none focus:border-purple-500">
                        <option value="headless">Headless CMS & Strapi API Platform</option>
                        <option value="climate">Climate-Tech MRV & GIS Data Platform</option>
                        <option value="fullstack">Full-Stack Web App (PHP / Node.js + React)</option>
                        <option value="ai">AI / OpenAI Enhanced Application</option>
                        <option value="api">Custom REST API & Database Optimization</option>
                    </select>
                </div>

                <!-- Backend Complexity -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                        Data Layer & Database Complexity
                    </label>
                    <div class="grid grid-cols-3 gap-2 text-xs">
                        <button type="button" onclick="setComplexity('standard', this)" class="scope-btn px-3 py-2.5 rounded-xl border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold">Standard</button>
                        <button type="button" onclick="setComplexity('advanced', this)" class="scope-btn px-3 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 font-medium">Advanced</button>
                        <button type="button" onclick="setComplexity('enterprise', this)" class="scope-btn px-3 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 font-medium">Enterprise</button>
                    </div>
                </div>

                <!-- Additional Features Checkboxes -->
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                        Advanced Modules
                    </label>
                    <div class="space-y-2 text-xs text-slate-600 dark:text-slate-300">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="chkAuth" checked onchange="calculateScope()" class="rounded text-purple-600 focus:ring-purple-500">
                            <span>JWT / OAuth Authentication & Role-Based Access</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="chkAI" onchange="calculateScope()" class="rounded text-purple-600 focus:ring-purple-500">
                            <span>OpenAI LLM Integration & Document Intelligence</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" id="chkGIS" onchange="calculateScope()" class="rounded text-purple-600 focus:ring-purple-500">
                            <span>Spatial GPS / Plot Geo-Tagging Ingestion</span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Scope Output Card -->
            <div class="glass-card p-6 sm:p-8 rounded-2xl border border-purple-500/30 flex flex-col justify-between bg-gradient-to-b from-purple-500/5 to-transparent">
                <div>
                    <span class="text-xs font-bold text-purple-600 dark:text-purple-400 uppercase tracking-widest">Recommended Scope</span>
                    <h3 id="scopeSummaryTitle" class="text-xl font-bold text-slate-900 dark:text-white mt-1 mb-3">
                        Headless CMS & API Platform
                    </h3>
                    <p id="scopeDescription" class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                        Production-grade Strapi Headless CMS deployment with custom content models, role-based access control, PostgreSQL integration, and TypeScript services.
                    </p>

                    <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-800 space-y-3">
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 dark:text-slate-400">Estimated Timeline:</span>
                            <span id="scopeTimeline" class="font-bold text-slate-900 dark:text-white">2 – 3 Weeks</span>
                        </div>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 dark:text-slate-400">Architecture Tier:</span>
                            <span id="scopeTier" class="font-bold text-emerald-600 dark:text-emerald-400">Standard Production</span>
                        </div>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-500 dark:text-slate-400">Core Stack:</span>
                            <span id="scopeStack" class="font-bold text-purple-600 dark:text-purple-400">Node.js + Strapi + PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <div class="mt-6 pt-4">
                    <a id="scopeCtaBtn" href="<?= BASE_URL ?>pages/contact.php?subject=Scope+Inquiry" class="w-full btn-primary text-xs py-3 flex items-center justify-center gap-2">
                        <span>Book Technical Discussion</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= 5-STEP ENGINEERING WORKFLOW ================= -->
<section class="py-20 px-5 sm:px-8 lg:px-[8%]">
    <div class="max-w-5xl mx-auto">
        <div class="reveal text-center mb-14">
            <span class="gradient-badge mb-2">Methodology</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">
                How I <span class="gradient-text">Architect & Deliver</span>
            </h2>
            <p class="mt-2 text-slate-600 dark:text-slate-400 text-xs sm:text-sm max-w-xl mx-auto">
                A disciplined engineering approach ensuring high code quality, predictability, and security.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            <!-- Step 1 -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center relative group hover:border-purple-500/50 transition">
                <span class="w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-sm mx-auto mb-4 group-hover:scale-110 transition-transform">01</span>
                <h4 class="font-bold text-slate-900 dark:text-white text-sm">Requirements & Schemas</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Deep architectural analysis, database normalization, ER diagrams.</p>
            </div>

            <!-- Step 2 -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center relative group hover:border-indigo-500/50 transition">
                <span class="w-10 h-10 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-sm mx-auto mb-4 group-hover:scale-110 transition-transform">02</span>
                <h4 class="font-bold text-slate-900 dark:text-white text-sm">Core Backend Engine</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Node.js / Strapi / PHP APIs, secure controllers, database models.</p>
            </div>

            <!-- Step 3 -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center relative group hover:border-sky-500/50 transition">
                <span class="w-10 h-10 rounded-xl bg-sky-100 dark:bg-sky-950/60 text-sky-600 dark:text-sky-400 flex items-center justify-center font-bold text-sm mx-auto mb-4 group-hover:scale-110 transition-transform">03</span>
                <h4 class="font-bold text-slate-900 dark:text-white text-sm">Integration Layer</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">OpenAI LLM hooks, GIS spatial ingest, third-party webhooks.</p>
            </div>

            <!-- Step 4 -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center relative group hover:border-amber-500/50 transition">
                <span class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-sm mx-auto mb-4 group-hover:scale-110 transition-transform">04</span>
                <h4 class="font-bold text-slate-900 dark:text-white text-sm">Testing & Profiling</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Postman API validation, MySQL/PostgreSQL query optimization.</p>
            </div>

            <!-- Step 5 -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center relative group hover:border-emerald-500/50 transition">
                <span class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-sm mx-auto mb-4 group-hover:scale-110 transition-transform">05</span>
                <h4 class="font-bold text-slate-900 dark:text-white text-sm">Deployment & Monitoring</h4>
                <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">CI/CD git workflows, production rollouts, ongoing support.</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= SERVICES CTA ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-4xl mx-auto glass-card p-8 sm:p-12 rounded-3xl border border-purple-500/30 text-center bg-gradient-to-r from-purple-900/20 via-indigo-900/20 to-purple-900/20">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">
            Have a Complex Engineering Problem to Solve?
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm mt-3 max-w-xl mx-auto leading-relaxed">
            Whether you need a full-featured Strapi Headless CMS platform, an MRV carbon accounting pipeline, or an optimized PostgreSQL / PHP backend, let's connect.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <a href="<?= BASE_URL ?>pages/contact.php" class="btn-primary">
                <span>Start a Project</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
            <a href="<?= BASE_URL ?>pages/portfolio.php" class="btn-outline">
                <span>View Portfolio Projects</span>
            </a>
        </div>
    </div>
</section>

<script>
let currentComplexity = 'standard';

function setComplexity(level, btn) {
    currentComplexity = level;
    document.querySelectorAll('.scope-btn').forEach(b => {
        b.className = 'scope-btn px-3 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 font-medium';
    });
    btn.className = 'scope-btn px-3 py-2.5 rounded-xl border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold';
    calculateScope();
}

function calculateScope() {
    const type = document.getElementById('calcType').value;
    const chkAI = document.getElementById('chkAI').checked;
    const chkGIS = document.getElementById('chkGIS').checked;

    let title = "Headless CMS & API Platform";
    let desc = "Production-grade Strapi Headless CMS deployment with custom content models, role-based access control, PostgreSQL integration, and TypeScript services.";
    let timeline = "2 – 3 Weeks";
    let stack = "Node.js + Strapi + PostgreSQL";

    if (type === 'climate') {
        title = "Climate-Tech MRV Platform System";
        desc = "Dedicated backend engine for nature-based carbon accounting, Enhanced Rock Weathering metrics, GPS plot ingestion, and audit dashboards.";
        timeline = "4 – 6 Weeks";
        stack = "Node.js + TypeScript + PostgreSQL + Strapi";
    } else if (type === 'fullstack') {
        title = "Full-Stack MVC Web Application";
        desc = "End-to-end web system built with CodeIgniter 4 / Laravel, MySQL query optimization, and responsive Tailwind UI.";
        timeline = "3 – 4 Weeks";
        stack = "PHP 8 + CodeIgniter 4 + MySQL + React";
    } else if (type === 'ai') {
        title = "AI & OpenAI Augmented Platform";
        desc = "Smart backend integrating OpenAI API for resume evaluation, medical data extraction, and automated PDF delivery.";
        timeline = "2 – 3 Weeks";
        stack = "OpenAI API + PHP / Node.js + mPDF";
    } else if (type === 'api') {
        title = "Custom REST API & Query Optimization";
        desc = "High-throughput RESTful endpoints with micro-second database query tuning and security hardening.";
        timeline = "1 – 2 Weeks";
        stack = "PostgreSQL / MySQL + Node.js / PHP";
    }

    if (currentComplexity === 'advanced') {
        timeline = timeline.replace(/(\d+)/g, match => parseInt(match) + 1);
    } else if (currentComplexity === 'enterprise') {
        timeline = timeline.replace(/(\d+)/g, match => parseInt(match) + 2);
    }

    if (chkAI && !stack.includes('OpenAI')) stack += " + OpenAI API";
    if (chkGIS && !stack.includes('GIS')) stack += " + GIS / GPS";

    document.getElementById('scopeSummaryTitle').textContent = title;
    document.getElementById('scopeDescription').textContent = desc;
    document.getElementById('scopeTimeline').textContent = timeline;
    document.getElementById('scopeTier').textContent = currentComplexity.charAt(0).toUpperCase() + currentComplexity.slice(1) + " Production";
    document.getElementById('scopeStack').textContent = stack;
    document.getElementById('scopeCtaBtn').href = '<?= BASE_URL ?>pages/contact.php?subject=' + encodeURIComponent(title + " Scope");
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
