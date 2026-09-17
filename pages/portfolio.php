<?php
$pageTitle = "Selected Projects & Engineering Portfolio | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= PORTFOLIO HERO BANNER ================= -->
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
            <span class="text-purple-600 dark:text-purple-400">Portfolio</span>
        </nav>

        <span class="gradient-badge mb-4">Engineering Showcase</span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            Featured Projects & <span class="gradient-text">Case Studies</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
            A curated showcase of production climate-tech platforms, AI-augmented web applications, and enterprise full-stack systems.
        </p>

        <!-- Live Search & Category Bar -->
        <div class="reveal mt-10 max-w-3xl mx-auto space-y-5">
            <!-- Search Bar -->
            <div class="relative">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                <input type="text" 
                       id="projectSearchInput" 
                       oninput="filterProjectsBySearch()" 
                       placeholder="Search by project name, tech stack (e.g. Strapi, Node.js, PostgreSQL, OpenAI, PHP)..." 
                       class="w-full pl-11 pr-4 py-3.5 rounded-2xl glass-card border border-slate-200 dark:border-slate-800 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 shadow-sm transition">
            </div>

            <!-- Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2 text-xs font-medium">
                <button type="button" onclick="filterPortfolioCategory('all', this)" class="port-filter-btn px-4 py-2 rounded-full border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold shadow-sm">All Projects</button>
                <button type="button" onclick="filterPortfolioCategory('climate', this)" class="port-filter-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-emerald-500 transition">Climate-Tech & MRV</button>
                <button type="button" onclick="filterPortfolioCategory('ai', this)" class="port-filter-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-indigo-500 transition">AI & LLM Apps</button>
                <button type="button" onclick="filterPortfolioCategory('backend', this)" class="port-filter-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-purple-500 transition">Headless CMS & Node.js</button>
                <button type="button" onclick="filterPortfolioCategory('enterprise', this)" class="port-filter-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-amber-500 transition">Enterprise PHP & MVC</button>
            </div>
        </div>
    </div>
</section>

<!-- ================= PROJECTS GRID ================= -->
<section class="py-12 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-6xl mx-auto">

        <div id="projectsPortfolioGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project 1: MRV Platform (Flagship) -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="climate backend" 
                 data-keywords="mrv platform eelab carbon node.js strapi typescript javascript postgresql spatial gis erw carbon credits">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-emerald-950/80 via-slate-900 to-indigo-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-emerald-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                Flagship / Active Role
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-emerald-400 text-sm">
                                <i class="fa-solid fa-seedling"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-emerald-400 font-semibold tracking-wider uppercase">EELAB CARBON Pvt Ltd</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">MRV Platform</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Proprietary Measurement, Reporting, and Verification system for Enhanced Rock Weathering (ERW). Handles spatial GPS plot ingestion, field soil analysis, and audit-grade carbon sequestration quantification.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-emerald-50 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800/40">Node.js</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-indigo-50 dark:bg-indigo-950/40 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800/40">Strapi CMS</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800/40">TypeScript</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-sky-50 dark:bg-sky-950/40 text-sky-700 dark:text-sky-300 border border-sky-200 dark:border-sky-800/40">PostgreSQL</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <a href="<?= BASE_URL ?>pages/portfolio-details.php" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1.5">
                        <span>Read Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                    <a href="https://eelabcarbon.com/" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center gap-1">
                        <span>Live Site</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2: AI-Powered CV Evaluation System -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="ai enterprise" 
                 data-keywords="ai cv resume evaluator openai api php codeigniter mpdf candidate ranking prompt engineering">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-purple-950/80 via-slate-900 to-indigo-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-purple-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-purple-500/20 text-purple-300 border border-purple-500/30">
                                AI Application
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-purple-400 text-sm">
                                <i class="fa-solid fa-robot"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-purple-400 font-semibold tracking-wider uppercase">HR Tech & LLM Automation</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">AI-Powered CV Evaluator</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Automated candidate resume parsing and scoring platform powered by OpenAI GPT API. Extracts candidate competencies, scores relevance against job descriptions, and generates PDF reports.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/40">PHP 8</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-indigo-50 dark:bg-indigo-950/40 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800/40">OpenAI API</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-amber-50 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-800/40">mPDF</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">CodeIgniter 4</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <button type="button" onclick="openProjectModal('cv-evaluator')" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1.5">
                        <span>View Details</span>
                        <i class="fa-solid fa-circle-info text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center gap-1">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>Source</span>
                    </a>
                </div>
            </div>

            <!-- Project 3: AI Medical Prescription Parser -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="ai backend" 
                 data-keywords="medical prescription parser healthtech openai vision ocr structured json php mysql node.js">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-cyan-950/80 via-slate-900 to-blue-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-cyan-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-cyan-500/20 text-cyan-300 border border-cyan-500/30">
                                HealthTech AI
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-cyan-400 text-sm">
                                <i class="fa-solid fa-notes-medical"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-cyan-400 font-semibold tracking-wider uppercase">Vision & NLP Pipeline</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">AI Prescription Parser</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Extracts handwritten clinical notes, dosages, and drug schedules from medical prescriptions into normalized JSON schemas for electronic health records (EHR).
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-cyan-50 dark:bg-cyan-950/40 text-cyan-700 dark:text-cyan-300 border border-cyan-200 dark:border-cyan-800/40">OpenAI Vision</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800/40">JSON Schema</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/40">PHP / Node.js</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <button type="button" onclick="openProjectModal('prescription-parser')" class="text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:underline flex items-center gap-1.5">
                        <span>View Details</span>
                        <i class="fa-solid fa-circle-info text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center gap-1">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>Source</span>
                    </a>
                </div>
            </div>

            <!-- Project 4: Enterprise CRM & Lead Routing Platform -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="enterprise backend" 
                 data-keywords="enterprise crm lead routing php 8 codeigniter 4 mysql query optimization rest api vxplore">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-amber-950/80 via-slate-900 to-orange-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-amber-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-amber-500/20 text-amber-300 border border-amber-500/30">
                                Enterprise MVC
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-amber-400 text-sm">
                                <i class="fa-solid fa-chart-line"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-amber-400 font-semibold tracking-wider uppercase">Vxplore Technologies</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">Enterprise Lead CRM</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Multi-tenant enterprise CRM with automated lead assignment algorithms, activity audit logs, dynamic report generation, and sub-100ms MySQL query response times.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-amber-50 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300 border border-amber-200 dark:border-amber-800/40">CodeIgniter 4</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800/40">MySQL Optimized</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/40">REST APIs</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">RBAC</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <button type="button" onclick="openProjectModal('lead-crm')" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline flex items-center gap-1.5">
                        <span>View Details</span>
                        <i class="fa-solid fa-circle-info text-[10px]"></i>
                    </button>
                    <span class="text-xs text-slate-400">Enterprise Private</span>
                </div>
            </div>

            <!-- Project 5: E-Commerce REST API Engine -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="backend enterprise" 
                 data-keywords="ecommerce api engine laravel php mysql jwt razorpay stripe inventory management">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-rose-950/80 via-slate-900 to-red-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-rose-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-rose-500/20 text-rose-300 border border-rose-500/30">
                                Scalable REST Engine
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-rose-400 text-sm">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-rose-400 font-semibold tracking-wider uppercase">Headless Commerce</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">E-Commerce REST API</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Stateless REST API backend for high-traffic commerce platforms. Includes cart calculations, discount coupon engines, inventory stock locking, and payment webhooks.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-red-50 dark:bg-red-950/40 text-red-700 dark:text-red-300 border border-red-200 dark:border-red-800/40">Laravel</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/40">JWT Auth</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800/40">MySQL</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Payment Webhooks</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <button type="button" onclick="openProjectModal('ecommerce-api')" class="text-xs font-bold text-rose-600 dark:text-rose-400 hover:underline flex items-center gap-1.5">
                        <span>View Details</span>
                        <i class="fa-solid fa-circle-info text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center gap-1">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>Source</span>
                    </a>
                </div>
            </div>

            <!-- Project 6: Modern UI Component Design System -->
            <div class="portfolio-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group" 
                 data-category="backend enterprise" 
                 data-keywords="modern ui component design system tailwind css javascript glassmorphism accessibility">
                <div>
                    <!-- Banner Visual -->
                    <div class="relative h-48 bg-gradient-to-tr from-indigo-950/80 via-slate-900 to-purple-950 p-6 flex flex-col justify-between overflow-hidden">
                        <div class="ambient-glow -bottom-10 -right-10 bg-indigo-500/30"></div>
                        <div class="flex items-center justify-between relative z-10">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">
                                UI & Frontend System
                            </span>
                            <span class="w-8 h-8 rounded-xl bg-white/10 backdrop-blur-md flex items-center justify-center text-indigo-400 text-sm">
                                <i class="fa-solid fa-palette"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <span class="text-xs text-indigo-400 font-semibold tracking-wider uppercase">Design & Interactivity</span>
                            <h3 class="text-xl font-bold text-white tracking-tight mt-0.5">Glassmorphic UI Engine</h3>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Comprehensive frontend component library with dark/light mode switches, reactive filters, smooth reveal animations, and accessible keyboard navigation.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-4">
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-indigo-50 dark:bg-indigo-950/40 text-indigo-700 dark:text-indigo-300 border border-indigo-200 dark:border-indigo-800/40">Tailwind CSS</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-yellow-50 dark:bg-yellow-950/40 text-yellow-700 dark:text-yellow-300 border border-yellow-200 dark:border-yellow-800/40">JavaScript ES6+</span>
                            <span class="px-2.5 py-1 rounded-md text-[11px] font-medium bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/40">Glassmorphism</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <a href="<?= BASE_URL ?>pages/elements.php" class="text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:underline flex items-center gap-1.5">
                        <span>Explore Elements</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" rel="noopener noreferrer" class="text-xs text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center gap-1">
                        <i class="fa-brands fa-github text-sm"></i>
                        <span>Source</span>
                    </a>
                </div>
            </div>

        </div>

        <!-- No Results Fallback -->
        <div id="noPortfolioResults" class="hidden text-center py-16">
            <div class="w-16 h-16 rounded-2xl bg-slate-100 dark:bg-slate-800 text-slate-400 flex items-center justify-center text-2xl mx-auto mb-4">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">No projects found</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Try searching with a different keyword or select another category.</p>
        </div>

    </div>
</section>

<!-- ================= PORTFOLIO CTA ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-4xl mx-auto glass-card p-8 sm:p-12 rounded-3xl border border-emerald-500/30 text-center bg-gradient-to-r from-emerald-950/20 via-slate-900/30 to-indigo-950/20">
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">
            Interested in the Architecture Behind These Projects?
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm mt-3 max-w-xl mx-auto leading-relaxed">
            Read the detailed technical breakdown of the flagship <strong>MRV Platform</strong> or discuss your custom engineering requirements.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 mt-8">
            <a href="<?= BASE_URL ?>pages/portfolio-details.php" class="btn-primary">
                <span>Explore MRV Platform Case Study</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
            <a href="<?= BASE_URL ?>pages/contact.php" class="btn-outline">
                <span>Get in Touch</span>
            </a>
        </div>
    </div>
</section>

<script>
let currentPortCategory = 'all';

function filterPortfolioCategory(category, btn) {
    currentPortCategory = category;
    document.querySelectorAll('.port-filter-btn').forEach(b => {
        b.className = 'port-filter-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-purple-500 transition';
    });
    btn.className = 'port-filter-btn px-4 py-2 rounded-full border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold shadow-sm';
    applyPortfolioFilters();
}

function filterProjectsBySearch() {
    applyPortfolioFilters();
}

function applyPortfolioFilters() {
    const query = (document.getElementById('projectSearchInput')?.value || '').toLowerCase().trim();
    const cards = document.querySelectorAll('.portfolio-item-card');
    let visibleCount = 0;

    cards.forEach(card => {
        const category = card.getAttribute('data-category') || '';
        const keywords = (card.getAttribute('data-keywords') || '').toLowerCase();
        const textContent = card.textContent.toLowerCase();

        const matchesCategory = (currentPortCategory === 'all' || category.includes(currentPortCategory));
        const matchesQuery = (!query || keywords.includes(query) || textContent.includes(query));

        if (matchesCategory && matchesQuery) {
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.classList.add('hidden');
        }
    });

    const fallback = document.getElementById('noPortfolioResults');
    if (fallback) {
        if (visibleCount === 0) {
            fallback.classList.remove('hidden');
        } else {
            fallback.classList.add('hidden');
        }
    }
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
