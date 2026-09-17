<?php
require_once __DIR__ . '/includes/header.php';
?>

<!-- ================= HERO SECTION ================= -->
<section id="top" class="min-h-screen pt-28 pb-16 px-5 sm:px-8 lg:px-[8%] flex items-center justify-center relative">
    <div class="max-w-5xl mx-auto text-center flex flex-col items-center gap-6 z-10">
        
        <!-- Live Status Pill -->
        <div class="reveal inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full glass-card border border-emerald-500/30 text-xs sm:text-sm font-medium text-slate-700 dark:text-slate-300 shadow-sm">
            <span class="relative flex h-2.5 w-2.5">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
            </span>
            <span>Available for Full-Time Roles & High-Impact Projects</span>
        </div>

        <!-- Profile Avatar with Gradient Halo -->
        <div class="reveal relative group my-2">
            <div class="absolute -inset-1.5 bg-gradient-to-r from-purple-600 via-indigo-600 to-amber-500 rounded-full blur-md opacity-70 group-hover:opacity-100 transition duration-500 animate-pulse_slow"></div>
            <div class="relative w-32 h-32 sm:w-40 sm:h-40 rounded-full overflow-hidden border-4 border-white dark:border-slate-800 shadow-2xl bg-slate-100 dark:bg-slate-800">
                <img src="<?= BASE_URL ?>assets/profile-img.png" 
                     alt="Sudipan Mandal" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                     onerror="this.src='<?= BASE_URL ?>assets/user-image.png'" />
            </div>
            <span class="absolute bottom-1 right-2 w-7 h-7 rounded-full bg-purple-600 text-white flex items-center justify-center text-xs shadow-md border-2 border-white dark:border-slate-900" title="Full Stack Developer">
                <i class="fa-solid fa-code"></i>
            </span>
        </div>

        <!-- Dynamic Typing Introduction -->
        <div class="reveal flex flex-col items-center gap-2">
            <h2 class="text-lg sm:text-xl md:text-2xl font-medium text-slate-600 dark:text-slate-300 flex items-center gap-2">
                <span>Hi, I'm</span>
                <span class="font-bold text-slate-900 dark:text-white">Sudipan Mandal</span>
                <img src="<?= BASE_URL ?>assets/hand-icon.png" class="w-6 inline-block animate-bounce" alt="wave" />
            </h2>
            <div class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight min-h-[1.3em]">
                <span class="gradient-text" id="typewriterText"></span>
                <span class="typed-cursor text-purple-600 dark:text-purple-400"></span>
            </div>
        </div>

        <!-- Hero Subtitle / Engineering Mindset -->
        <p class="reveal max-w-3xl text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed font-light">
            Junior Engineer & Full Stack Developer building the <span class="font-semibold text-slate-900 dark:text-white">MRV Platform</span> at <span class="font-semibold text-slate-900 dark:text-white">EELAB CARBON</span>, with enterprise backend background at <span class="font-semibold text-slate-900 dark:text-white">Vxplore Technologies</span>. 
            Specializing in <span class="text-purple-600 dark:text-purple-400 font-medium">Node.js, Strapi (Headless CMS), TypeScript, JavaScript, PostgreSQL, PHP 8, and RESTful APIs</span>.
        </p>

        <!-- Hero Action Buttons -->
        <div class="reveal flex flex-wrap items-center justify-center gap-4 mt-2">
            <a href="#work" class="btn-primary">
                <span>Explore Projects</span>
                <i class="fa-solid fa-arrow-down text-xs"></i>
            </a>
            <a href="<?= BASE_URL ?>assets/Resume/Sudipan_Mandal_FullStack_PHP_Developer_CV.pdf" 
               target="_blank" 
               rel="noopener noreferrer"
               class="btn-outline">
                <i class="fa-solid fa-file-pdf text-purple-600 dark:text-purple-400"></i>
                <span>View Resume</span>
            </a>
            <a href="#contact" class="btn-outline">
                <i class="fa-regular fa-paper-plane text-indigo-600 dark:text-indigo-400"></i>
                <span>Get in Touch</span>
            </a>
        </div>

        <!-- Tech Stack Pill Ribbon -->
        <div class="reveal pt-6 flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs font-medium text-slate-500 dark:text-slate-400">
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-brands fa-node-js text-emerald-500 text-sm"></i> Node.js
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-solid fa-cube text-indigo-500 text-sm"></i> Strapi (Headless CMS)
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-solid fa-code text-blue-500 text-sm"></i> TypeScript
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-brands fa-js text-yellow-500 text-sm"></i> JavaScript
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-solid fa-database text-sky-500 text-sm"></i> PostgreSQL
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-brands fa-php text-purple-500 text-sm"></i> PHP 8+
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-solid fa-fire text-amber-500 text-sm"></i> CodeIgniter 4 / Laravel
            </span>
            <span class="px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 flex items-center gap-1.5">
                <i class="fa-solid fa-robot text-emerald-500 text-sm"></i> OpenAI API
            </span>
        </div>

    </div>
</section>

<!-- ================= IMPACT METRICS BAR ================= -->
<section class="py-10 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
        
        <div class="reveal glass-card p-6 text-center border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1 transition duration-300">
            <div class="text-3xl sm:text-4xl font-extrabold text-purple-600 dark:text-purple-400 mb-1 flex items-center justify-center">
                <span class="counter" data-target="1.5">0</span><span class="text-purple-600 dark:text-purple-400">+</span>
            </div>
            <p class="text-xs sm:text-sm font-medium text-slate-600 dark:text-slate-400">Years Experience</p>
            <span class="text-[11px] text-slate-400 dark:text-slate-500">Live Production Work</span>
        </div>

        <div class="reveal glass-card p-6 text-center border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1 transition duration-300">
            <div class="text-3xl sm:text-4xl font-extrabold text-indigo-600 dark:text-indigo-400 mb-1 flex items-center justify-center">
                <span class="counter" data-target="5">0</span><span class="text-indigo-600 dark:text-indigo-400">+</span>
            </div>
            <p class="text-xs sm:text-sm font-medium text-slate-600 dark:text-slate-400">Production Projects</p>
            <span class="text-[11px] text-slate-400 dark:text-slate-500">AI & Full-Stack Apps</span>
        </div>

        <div class="reveal glass-card p-6 text-center border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1 transition duration-300">
            <div class="text-3xl sm:text-4xl font-extrabold text-emerald-600 dark:text-emerald-400 mb-1 flex items-center justify-center">
                <span class="counter" data-target="100">0</span><span class="text-emerald-600 dark:text-emerald-400">%</span>
            </div>
            <p class="text-xs sm:text-sm font-medium text-slate-600 dark:text-slate-400">Code Quality & Delivery</p>
            <span class="text-[11px] text-slate-400 dark:text-slate-500">Clean MVC & REST</span>
        </div>

        <div class="reveal glass-card p-6 text-center border border-slate-200/80 dark:border-slate-800 group hover:-translate-y-1 transition duration-300">
            <div class="text-3xl sm:text-4xl font-extrabold text-amber-500 mb-1 flex items-center justify-center">
                <span class="counter" data-target="10">0</span><span class="text-amber-500">+</span>
            </div>
            <p class="text-xs sm:text-sm font-medium text-slate-600 dark:text-slate-400">Technologies Mastered</p>
            <span class="text-[11px] text-slate-400 dark:text-slate-500">Frontend to Database</span>
        </div>

    </div>
</section>

<!-- ================= ABOUT SECTION ================= -->
<section id="about" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 relative">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-14">
            <span class="gradient-badge mb-2">Introduction</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                About <span class="gradient-text">Me</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">
                Engineering scalable, secure, and user-centric web applications with modern software practices.
            </p>
        </div>

        <!-- 2-Column Content -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Interactive Image Card -->
            <div class="reveal lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-sm">
                    <div class="glass-card p-3 rounded-3xl relative overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/user-image.png" 
                             alt="Sudipan Mandal Developer" 
                             class="w-full h-auto rounded-2xl object-cover grayscale group-hover:grayscale-0 transition duration-500" />
                        
                        <!-- Floating Badge -->
                        <div class="absolute bottom-6 right-6 glass-card px-4 py-2.5 rounded-2xl border border-purple-500/30 flex items-center gap-3 shadow-xl">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white flex items-center justify-center">
                                <i class="fa-solid fa-laptop-code text-base"></i>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900 dark:text-white">BCA Graduate</h4>
                                <p class="text-[10px] text-slate-500 dark:text-slate-400">MAKAUT (CGPA 7.27)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Bio & Engineering Core -->
            <div class="reveal lg:col-span-7 flex flex-col gap-6">
                <div>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Junior Engineer & Full-Stack Developer
                    </h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed mb-4">
                        I am a dedicated software engineer based in Kolkata specializing in scalable backend architectures, headless CMS engineering, and climate-tech data systems. 
                        At <strong class="text-slate-900 dark:text-white">EELAB CARBON Pvt Ltd</strong>, I engineer backend systems and REST APIs for the proprietary <strong class="text-emerald-600 dark:text-emerald-400">MRV Platform</strong> (Measurement, Reporting, and Verification) using <strong class="text-indigo-600 dark:text-indigo-400">Node.js, Strapi Headless CMS, TypeScript, JavaScript, and PostgreSQL</strong> for Enhanced Rock Weathering (ERW) and carbon credit accounting.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed mb-4">
                        Previously at <strong class="text-slate-900 dark:text-white">Vxplore Technologies</strong>, I built and maintained enterprise web applications using <strong class="text-purple-600 dark:text-purple-400">PHP 8 and CodeIgniter 4</strong>, adhering strictly to MVC architecture and optimizing database throughput.
                    </p>
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                        I also actively integrate AI capabilities like the <strong class="text-indigo-600 dark:text-indigo-400">OpenAI API</strong> into modern web applications (such as intelligent CV analyzers and medical prescription scanners), bridging traditional backends with modern intelligence.
                    </p>
                </div>

                <!-- 3 Highlights Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-purple-500/40 transition">
                        <i class="fa-solid fa-code text-purple-600 dark:text-purple-400 text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Languages</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">TypeScript, JavaScript (ES6+), PHP 8, Python, HTML5/CSS3</p>
                    </div>

                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-indigo-500/40 transition">
                        <i class="fa-solid fa-layer-group text-indigo-600 dark:text-indigo-400 text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Frameworks & CMS</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Node.js, Strapi (Headless CMS), CodeIgniter 4, Laravel, React.js</p>
                    </div>

                    <div class="glass-card p-4 rounded-xl border border-slate-200 dark:border-slate-800 hover:border-amber-500/40 transition">
                        <i class="fa-solid fa-database text-amber-500 text-xl mb-2"></i>
                        <h4 class="font-bold text-slate-900 dark:text-white text-sm">Databases</h4>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">PostgreSQL, MySQL (Optimization), Firebase, MongoDB</p>
                    </div>
                </div>

                <!-- Tools Ecosystem -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-3">
                        Tools & Workflow Ecosystem
                    </h4>
                    <div class="flex flex-wrap items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-brands fa-git-alt text-orange-500 text-sm"></i> Git & GitHub
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-terminal text-blue-500 text-sm"></i> VS Code
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-paper-plane text-orange-400 text-sm"></i> Postman
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-solid fa-server text-yellow-500 text-sm"></i> XAMPP / Apache
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg glass-card text-xs font-medium text-slate-700 dark:text-slate-200">
                            <i class="fa-brands fa-figma text-pink-500 text-sm"></i> Figma
                        </span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ================= PROFESSIONAL EXPERIENCE ================= -->
<section id="experience" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 bg-slate-100/50 dark:bg-slate-900/30 relative">
    <div class="max-w-5xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-14">
            <span class="gradient-badge mb-2">Career Journey</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Professional <span class="gradient-text">Experience</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-xl mx-auto text-sm sm:text-base">
                Hands-on backend development and production delivery for live enterprise applications.
            </p>
        </div>

        <!-- Experience Timeline -->
        <div class="relative border-l-2 border-purple-500/30 dark:border-purple-500/20 ml-4 sm:ml-8 space-y-12">
            
            <!-- Timeline Item 1: EELAB CARBON Pvt Ltd -->
            <div class="reveal relative pl-8 sm:pl-10 group">
                <!-- Timeline Dot -->
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-emerald-500 border-4 border-white dark:border-[#0B0F17] shadow-md group-hover:scale-125 transition-transform"></div>

                <div class="glass-card p-6 sm:p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-emerald-100 dark:bg-emerald-900/40 text-emerald-700 dark:text-emerald-300 mb-2">
                                Feb 2026 – Present
                            </span>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white">
                                Junior Engineer
                            </h3>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400 flex items-center gap-1.5 mt-0.5">
                                <i class="fa-solid fa-building text-emerald-500"></i>
                                <a href="https://eelabcarbon.com/" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-600 dark:hover:text-emerald-400 hover:underline inline-flex items-center gap-1">
                                    EELAB CARBON Pvt Ltd
                                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                                </a>
                                • Kolkata, India
                            </p>
                        </div>
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-400 self-start sm:self-auto">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Full-time / Active Role
                        </span>
                    </div>

                    <!-- Project Highlight Badge -->
                    <div class="mb-4 inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 text-xs font-semibold text-slate-800 dark:text-slate-200">
                        <i class="fa-solid fa-seedling text-emerald-500"></i>
                        <span>Project: MRV Platform (Measurement, Reporting & Verification)</span>
                    </div>

                    <!-- Role Achievements -->
                    <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 mb-6">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Developing and maintaining backend services for the <strong>MRV Platform</strong> supporting nature-based carbon removal and Enhanced Rock Weathering (ERW).</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Architecting custom content schemas, controllers, and services using <strong>Node.js, Strapi Headless CMS, TypeScript, and JavaScript</strong> for type-safe and high-performance API delivery.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Designing and optimizing <strong>PostgreSQL relational schemas</strong> and spatial/geo-tagged data tracking for field soil sampling and carbon credit accounting.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Engineering secure <strong>RESTful APIs and JSON data pipelines</strong> for field data ingestion, GPS plot mapping, and transparent verification audit trails.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Implementing digital reporting pipelines connecting mobile data collection tools with the central MRV analytical dashboard for real-time monitoring.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-emerald-600 dark:text-emerald-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Collaborating within cross-functional technical and scientific teams using <strong>Git workflows</strong> to ensure continuous integration, code quality, and timely feature deployment.</span>
                        </li>
                    </ul>

                    <!-- Experience Tech Tags -->
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200 dark:border-slate-800">
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-emerald-50 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800/40">Node.js</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-emerald-50 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800/40">Strapi (Headless CMS)</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-emerald-50 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300 border border-emerald-200 dark:border-emerald-800/40">TypeScript</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">JavaScript (ES6+)</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PostgreSQL</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">RESTful APIs</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MRV Platform</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">ERW Carbon Accounting</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Git</span>
                    </div>
                </div>
            </div>

            <!-- Timeline Item 2: Vxplore Technologies -->
            <div class="reveal relative pl-8 sm:pl-10 group">
                <!-- Timeline Dot -->
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-purple-600 border-4 border-white dark:border-[#0B0F17] shadow-md group-hover:scale-125 transition-transform"></div>

                <div class="glass-card p-6 sm:p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                        <div>
                            <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 mb-2">
                                2025 – Feb 2026
                            </span>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white">
                                PHP Developer
                            </h3>
                            <p class="text-sm font-medium text-slate-600 dark:text-slate-400 flex items-center gap-1.5 mt-0.5">
                                <i class="fa-solid fa-building text-purple-500"></i>
                                Vxplore Technologies (P) Ltd. • Kolkata, India
                            </p>
                        </div>
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 self-start sm:self-auto">
                            <i class="fa-solid fa-check text-purple-500 text-[10px]"></i>
                            Full-time • Completed
                        </span>
                    </div>

                    <!-- Role Achievements -->
                    <ul class="space-y-2.5 text-sm text-slate-600 dark:text-slate-300 mb-6">
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Built and maintained scalable backend features using <strong>PHP and CodeIgniter 4 (CI4)</strong> strictly adhering to MVC architecture.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Conducted <strong>MySQL database management, schema design, and query optimization</strong> to ensure low latency and high data throughput.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Engineered and integrated secure <strong>RESTful APIs</strong> for third-party services and dynamic client-side consumption.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Executed comprehensive application testing, systematic debugging, bug fixing, and module enhancement for production releases.</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 flex-shrink-0 text-xs"></i>
                            <span>Collaborated within cross-functional teams utilizing <strong>Git workflows</strong> to ensure continuous integration and timely application delivery.</span>
                        </li>
                    </ul>

                    <!-- Experience Tech Tags -->
                    <div class="flex flex-wrap gap-2 pt-4 border-t border-slate-200 dark:border-slate-800">
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PHP 8</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">CodeIgniter 4 (CI4)</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MySQL</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">REST APIs</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">MVC Architecture</span>
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Git</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= SERVICES SECTION ================= -->
<section id="services" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 relative">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-14">
            <span class="gradient-badge mb-2">What I Offer</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Enterprise & <span class="gradient-text">MNC Services</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">
                Delivering resilient, modular, and high-performance software engineering solutions tailored to enterprise requirements.
            </p>
        </div>

        <!-- 4 Service Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            
            <!-- Service 1 -->
            <div class="reveal glass-card p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover group">
                <div class="w-14 h-14 rounded-2xl bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                    Full-Stack Web Development
                </h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
                    Architecting end-to-end web applications with PHP (CodeIgniter 4, Laravel), modern JavaScript, and responsive UI frameworks. Delivering secure authentication, session management, and fluid user experiences.
                </p>
                <ul class="space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500"></i> MVC Architecture & Clean Code</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500"></i> Responsive Mobile-First Interfaces</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-purple-500"></i> Role-Based Access Control (RBAC)</li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="reveal glass-card p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover group">
                <div class="w-14 h-14 rounded-2xl bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-network-wired"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                    Scalable REST APIs & Integrations
                </h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
                    Designing, building, and documenting high-performance RESTful APIs. Seamless integration of external APIs including payment gateways, OAuth logins, and real-time JSON services.
                </p>
                <ul class="space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500"></i> Stateless JSON Endpoints & Postman Specs</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500"></i> Payment Gateway & Webhook Pipelines</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-indigo-500"></i> Error Handling & Rate Limiting</li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="reveal glass-card p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover group">
                <div class="w-14 h-14 rounded-2xl bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-brain"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                    AI & OpenAI LLM Integrations
                </h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
                    Empowering traditional business web apps with intelligence. Specialized in OpenAI API prompt pipelines, resume scoring, smart data extraction, prescription parsing, and automated PDF reporting via mPDF.
                </p>
                <ul class="space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500"></i> LLM Prompt Engineering & JSON Outputs</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500"></i> Document Extraction & mPDF Reports</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-emerald-500"></i> Intelligent Recommendation Engines</li>
                </ul>
            </div>

            <!-- Service 4 -->
            <div class="reveal glass-card p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800 glass-card-hover group">
                <div class="w-14 h-14 rounded-2xl bg-amber-100 dark:bg-amber-900/40 text-amber-600 dark:text-amber-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">
                    Database Design & Optimization
                </h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4">
                    Relational schema architecture with MySQL, complex SQL queries, index optimization, and data normalization. Ensuring maximum throughput and minimal query latency for growing data.
                </p>
                <ul class="space-y-1.5 text-xs text-slate-500 dark:text-slate-400">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500"></i> Indexing & Query Profiling</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500"></i> Relational Integrity & Transactions</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-circle-check text-amber-500"></i> Data Migration & Backup Scripts</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- ================= TECHNICAL SKILLS MATRIX ================= -->
<section id="skills" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 bg-slate-100/40 dark:bg-slate-900/20 relative">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-12">
            <span class="gradient-badge mb-2">Technical Proficiency</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Skills & <span class="gradient-text">Competencies</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">
                Core technologies and engineering proficiencies mastered through hands-on industry and project execution.
            </p>
        </div>

        <!-- Skills Filter Tabs -->
        <div class="reveal flex flex-wrap items-center justify-center gap-2 mb-10">
            <button onclick="filterSkills('all')" class="skill-tab-btn active px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-purple-500 text-purple-600 dark:text-purple-400 shadow-sm" data-category="all">
                All Skills
            </button>
            <button onclick="filterSkills('backend')" class="skill-tab-btn px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="backend">
                Backend
            </button>
            <button onclick="filterSkills('frontend')" class="skill-tab-btn px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="frontend">
                Frontend
            </button>
            <button onclick="filterSkills('database')" class="skill-tab-btn px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="database">
                Database
            </button>
            <button onclick="filterSkills('ai')" class="skill-tab-btn px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="ai">
                AI & APIs
            </button>
            <button onclick="filterSkills('tools')" class="skill-tab-btn px-4 py-2 rounded-full text-xs font-semibold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="tools">
                Tools & DevOps
            </button>
        </div>

        <!-- Skills Cards Grid -->
        <div id="skillsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Skill: PHP -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="backend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-brands fa-php"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">PHP (Core & OOP)</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Advanced Backend</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-purple-600 dark:text-purple-400">90%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-purple-600 to-indigo-600 rounded-full" style="width: 90%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Authentication, Sessions, File Handling, MVC, Security best practices.</p>
            </div>

            <!-- Skill: CodeIgniter 4 -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="backend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-900/50 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-fire"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">CodeIgniter 4 (CI4)</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Production Framework</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-amber-500">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-amber-500 to-orange-500 rounded-full" style="width: 88%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">MVC Architecture, Controllers, Models, Filters, RESTful routes, Live support.</p>
            </div>

            <!-- Skill: Strapi Headless CMS -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="backend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-indigo-100 dark:bg-indigo-900/50 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-cube"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Strapi (Headless CMS)</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Content & API Framework</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-indigo-500">86%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full" style="width: 86%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Custom content types, schema controllers, RBAC, plugins, REST & GraphQL endpoints.</p>
            </div>

            <!-- Skill: TypeScript -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="frontend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-code"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">TypeScript</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Type-Safe Architecture</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-blue-500">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full" style="width: 85%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Interfaces, generics, type-safe API layers, structured data models for MRV metrics.</p>
            </div>

            <!-- Skill: Laravel -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="backend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-900/50 text-red-600 dark:text-red-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-brands fa-laravel"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Laravel Framework</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Enterprise Backend</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-red-500">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-red-500 to-pink-600 rounded-full" style="width: 85%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Eloquent ORM, Blade Engine, Routing, Migrations, Middleware, CRUD.</p>
            </div>

            <!-- Skill: Node.js Runtime -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="backend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-brands fa-node-js"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Node.js Framework</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Backend Runtime</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-emerald-500">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full" style="width: 88%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Asynchronous I/O, npm modules, REST APIs, Strapi engine backend integration.</p>
            </div>

            <!-- Skill: MySQL -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="database">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-900/50 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-database"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">MySQL Database</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Database Optimization</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-blue-500">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full" style="width: 88%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Schema design, Indexing, Query Optimization, Foreign keys, Stored Data.</p>
            </div>

            <!-- Skill: PostgreSQL -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="database">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-sky-100 dark:bg-sky-900/50 text-sky-600 dark:text-sky-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-database"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">PostgreSQL</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Relational & Spatial DB</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-sky-500">86%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-sky-500 to-blue-600 rounded-full" style="width: 86%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Relational schemas, queries, data integrity, spatial coordinates tracking for MRV.</p>
            </div>

            <!-- Skill: OpenAI & AI Integration -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="ai">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-900/50 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-robot"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">OpenAI API & LLMs</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">AI Application Engineering</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-emerald-500">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full" style="width: 85%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Prompt Engineering, CV Extraction, Medical Parsing, JSON APIs, mPDF.</p>
            </div>

            <!-- Skill: JavaScript & React -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="frontend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-yellow-100 dark:bg-yellow-900/50 text-yellow-600 dark:text-yellow-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-brands fa-square-js"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">JavaScript (ES6+) & React</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Modern Frontend</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-yellow-500">82%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-yellow-500 to-amber-500 rounded-full" style="width: 82%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Async/Await, DOM manipulation, React Hooks, State Management, AJAX.</p>
            </div>

            <!-- Skill: Tailwind & Bootstrap -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="frontend">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-cyan-100 dark:bg-cyan-900/50 text-cyan-600 dark:text-cyan-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-brands fa-css3-alt"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Tailwind CSS & Bootstrap</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Responsive UI/UX</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-cyan-500">90%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full" style="width: 90%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Pixel-perfect responsive design, Dark/Light mode, Glassmorphic UI.</p>
            </div>

            <!-- Skill: REST APIs & AJAX -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="ai">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-900/50 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-arrows-split-up-and-left"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">RESTful APIs & AJAX</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">System Integration</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-purple-500">88%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full" style="width: 88%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">JSON APIs, Asynchronous fetches, Payment gateways, Third-party SDKs.</p>
            </div>

            <!-- Skill: Git, VS Code, Postman -->
            <div class="skill-card glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 glass-card-hover" data-category="tools">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <span class="w-10 h-10 rounded-xl bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 flex items-center justify-center text-xl font-bold">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                        </span>
                        <div>
                            <h4 class="font-bold text-slate-900 dark:text-white">Git, Postman & DevOps</h4>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400">Workflow & Tooling</span>
                        </div>
                    </div>
                    <span class="text-xs font-bold text-slate-700 dark:text-slate-300">85%</span>
                </div>
                <div class="w-full h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden mb-3">
                    <div class="h-full bg-gradient-to-r from-slate-600 to-slate-800 rounded-full" style="width: 85%"></div>
                </div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Branching workflows, Postman API collections, XAMPP, Linux basics.</p>
            </div>

        </div>

    </div>
</section>

<!-- ================= FEATURED PROJECTS SHOWCASE ================= -->
<section id="work" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 relative">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-12">
            <span class="gradient-badge mb-2">Featured Portfolio</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Engineering <span class="gradient-text">Projects</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-2xl mx-auto text-sm sm:text-base">
                Explore production-ready web applications, AI integrations, and full-stack solutions built with clean architecture.
            </p>
        </div>

        <!-- Project Filter Buttons -->
        <div class="reveal flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
            <button onclick="filterProjects('all')" class="proj-filter-btn active px-5 py-2 rounded-full text-xs font-bold transition glass-card border border-purple-500 text-purple-600 dark:text-purple-400 shadow-sm" data-category="all">
                All Projects (5)
            </button>
            <button onclick="filterProjects('ai')" class="proj-filter-btn px-5 py-2 rounded-full text-xs font-bold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="ai">
                AI & Intelligence
            </button>
            <button onclick="filterProjects('fullstack')" class="proj-filter-btn px-5 py-2 rounded-full text-xs font-bold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="fullstack">
                Full-Stack PHP & Laravel
            </button>
            <button onclick="filterProjects('web')" class="proj-filter-btn px-5 py-2 rounded-full text-xs font-bold transition glass-card border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 hover:border-purple-500" data-category="web">
                Web Systems
            </button>
        </div>

        <!-- Projects Grid -->
        <div id="projectsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Project 1: AI-Powered CV Analyzer -->
            <div class="project-card reveal glass-card rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between" data-category="ai">
                <div>
                    <!-- Card Thumbnail with Mock Preview -->
                    <div class="relative h-48 bg-gradient-to-tr from-purple-900/60 to-indigo-950/80 p-6 flex flex-col justify-between overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/work-1.png" alt="AI CV Analyzer" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:scale-110 group-hover:opacity-40 transition duration-500" />
                        <div class="relative z-10 flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-purple-500/20 text-purple-300 border border-purple-400/30 backdrop-blur-md">
                                <i class="fa-solid fa-sparkles mr-1"></i> AI & OpenAI
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-file-invoice"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-tight">AI CV Analyzer</h3>
                            <p class="text-xs text-purple-200">Intelligent Resume Assessment & PDF Report</p>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Web application using PHP, OpenAI API, and mPDF to analyze uploaded CVs (DOCX/PDF). Extracts content, highlights missing skills for top MNC roles, and exports structured executive reports.
                        </p>
                        
                        <!-- Tech Tags -->
                        <div class="flex flex-wrap gap-1.5 mb-6">
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">PHP</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300">OpenAI API</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">mPDF</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">AJAX</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Actions -->
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <button onclick="openProjectModal('cv_analyzer')" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:text-purple-700 flex items-center gap-1.5">
                        <span>Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-purple-600">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2: SmartRx - AI Prescription Analyzer -->
            <div class="project-card reveal glass-card rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between" data-category="ai">
                <div>
                    <div class="relative h-48 bg-gradient-to-tr from-emerald-900/60 to-teal-950/80 p-6 flex flex-col justify-between overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/work-2.png" alt="SmartRx AI" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:scale-110 group-hover:opacity-40 transition duration-500" />
                        <div class="relative z-10 flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30 backdrop-blur-md">
                                <i class="fa-solid fa-stethoscope mr-1"></i> Healthcare AI
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-prescription-bottle-medical"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-tight">SmartRx AI Analyzer</h3>
                            <p class="text-xs text-emerald-200">Prescription Parsing & Medicine Intelligence</p>
                        </div>
                    </div>

                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Full-stack PHP and MySQL web application integrated with OpenAI API to analyze prescriptions, extract prescribed medicines, provide guidance, and securely persist clinical records.
                        </p>
                        
                        <div class="flex flex-wrap gap-1.5 mb-6">
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-emerald-50 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300">PHP 8</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-teal-50 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300">MySQL</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">OpenAI API</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">JSON Parsing</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <button onclick="openProjectModal('smart_rx')" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:text-emerald-700 flex items-center gap-1.5">
                        <span>Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-emerald-600">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Project 3: Laravel Student Management System -->
            <div class="project-card reveal glass-card rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between" data-category="fullstack">
                <div>
                    <div class="relative h-48 bg-gradient-to-tr from-red-900/60 to-rose-950/80 p-6 flex flex-col justify-between overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/work-3.png" alt="Laravel SMS" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:scale-110 group-hover:opacity-40 transition duration-500" />
                        <div class="relative z-10 flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-red-500/20 text-red-300 border border-red-400/30 backdrop-blur-md">
                                <i class="fa-brands fa-laravel mr-1"></i> Laravel MVC
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-tight">Student Management</h3>
                            <p class="text-xs text-red-200">Enterprise CRUD & Eloquent Architecture</p>
                        </div>
                    </div>

                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Engineered with Laravel MVC, Blade templating, and Eloquent ORM. Implemented student records management, paginated listing, instant search, validations, and responsive Bootstrap interface.
                        </p>
                        
                        <div class="flex flex-wrap gap-1.5 mb-6">
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-300">Laravel</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Blade</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">MySQL</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <button onclick="openProjectModal('student_system')" class="text-xs font-bold text-red-600 dark:text-red-400 hover:text-red-700 flex items-center gap-1.5">
                        <span>Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-red-600">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Project 4: Dynamic E-Commerce Web Platform -->
            <div class="project-card reveal glass-card rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between" data-category="fullstack">
                <div>
                    <div class="relative h-48 bg-gradient-to-tr from-amber-900/60 to-orange-950/80 p-6 flex flex-col justify-between overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/work-4.png" alt="E-Commerce" class="absolute inset-0 w-full h-full object-cover opacity-30 group-hover:scale-110 group-hover:opacity-40 transition duration-500" />
                        <div class="relative z-10 flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-amber-500/20 text-amber-300 border border-amber-400/30 backdrop-blur-md">
                                <i class="fa-solid fa-cart-shopping mr-1"></i> E-Commerce
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-tight">Full-Stack E-Commerce</h3>
                            <p class="text-xs text-amber-200">Catalog, Cart, Auth & Order Engine</p>
                        </div>
                    </div>

                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Full-featured online store with product listings, dynamic search filters, persistent shopping cart, checkout pipeline, customer authentication, and real-time AJAX interactions.
                        </p>
                        
                        <div class="flex flex-wrap gap-1.5 mb-6">
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">PHP</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-yellow-50 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300">JavaScript</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">MySQL</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">AJAX</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <button onclick="openProjectModal('ecommerce')" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:text-amber-700 flex items-center gap-1.5">
                        <span>Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-amber-600">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Project 5: Daily Expense Tracker -->
            <div class="project-card reveal glass-card rounded-2xl overflow-hidden border border-slate-200/80 dark:border-slate-800 glass-card-hover flex flex-col justify-between" data-category="web">
                <div>
                    <div class="relative h-48 bg-gradient-to-tr from-cyan-900/60 to-blue-950/80 p-6 flex flex-col justify-between overflow-hidden group">
                        <img src="<?= BASE_URL ?>assets/work-1.png" alt="Expense Tracker" class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:scale-110 group-hover:opacity-30 transition duration-500" />
                        <div class="relative z-10 flex justify-between items-start">
                            <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-cyan-500/20 text-cyan-300 border border-cyan-400/30 backdrop-blur-md">
                                <i class="fa-solid fa-chart-pie mr-1"></i> FinTech Web App
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/20 backdrop-blur-md text-white flex items-center justify-center text-xs">
                                <i class="fa-solid fa-wallet"></i>
                            </span>
                        </div>
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold text-white tracking-tight">Daily Expense Tracker</h3>
                            <p class="text-xs text-cyan-200">Budget Analytics & Real-Time Tracking</p>
                        </div>
                    </div>

                    <div class="p-6">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                            Real-life web app to track, manage, and visualize daily expenditures. Features multi-user authentication, categorized spending, budget limits, and dynamic summary calculations via AJAX.
                        </p>
                        
                        <div class="flex flex-wrap gap-1.5 mb-6">
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300">PHP</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300">MySQL</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300">Bootstrap 5</span>
                            <span class="px-2 py-0.5 rounded text-[11px] font-medium bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">AJAX</span>
                        </div>
                    </div>
                </div>

                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <button onclick="openProjectModal('expense_tracker')" class="text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:text-cyan-700 flex items-center gap-1.5">
                        <span>Case Study</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </button>
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:text-cyan-600">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= ACADEMIC CREDENTIALS ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] bg-slate-100/50 dark:bg-slate-900/30 relative">
    <div class="max-w-5xl mx-auto">
        <div class="reveal text-center mb-12">
            <span class="gradient-badge mb-2">Education</span>
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Academic <span class="gradient-text">Background</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Degree 1: BCA -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[11px] font-semibold bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 mb-1">
                        2021 – 2024
                    </span>
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">
                        Bachelor of Computer Applications (BCA)
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1">
                        Maulana Abul Kalam Azad University of Technology (MAKAUT)
                    </p>
                    <div class="mt-2 text-xs font-semibold text-purple-600 dark:text-purple-400">
                        CGPA: 7.27 / 10.0
                    </div>
                </div>
            </div>

            <!-- Degree 2: Higher Secondary -->
            <div class="reveal glass-card p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl flex-shrink-0">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div>
                    <span class="inline-block px-2.5 py-0.5 rounded text-[11px] font-semibold bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 mb-1">
                        2019 – 2021
                    </span>
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white">
                        Higher Secondary (10+2) — Pure Science
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1">
                        Dhapdhara BCS Vidyapith (West Bengal Board)
                    </p>
                    <div class="mt-2 text-xs font-semibold text-indigo-600 dark:text-indigo-400">
                        Marks Obtained: 68.70%
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= INTERACTIVE CONTACT SECTION ================= -->
<section id="contact" class="py-20 px-5 sm:px-8 lg:px-[8%] scroll-mt-20 relative overflow-hidden">
    <div class="max-w-6xl mx-auto">

        <!-- Section Header -->
        <div class="reveal text-center mb-14">
            <span class="gradient-badge mb-2">Get in Touch</span>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                Let's Build Something <span class="gradient-text">Exceptional</span>
            </h2>
            <p class="mt-3 text-slate-600 dark:text-slate-400 max-w-xl mx-auto text-sm sm:text-base">
                Whether you have an upcoming project, a job opening, or want to collaborate, feel free to send a message.
            </p>
        </div>

        <!-- 2-Column Grid: Contact Details & Dynamic Form -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">
            
            <!-- Left Column: Contact Cards -->
            <div class="reveal lg:col-span-5 flex flex-col gap-5">
                
                <div class="glass-card p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">
                        Contact Information
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mb-6">
                        I typically respond within 24 hours. Connect with me directly through any of the channels below.
                    </p>

                    <div class="space-y-4">
                        <a href="mailto:sudipanmandal@gmail.com" class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/60 transition group">
                            <div class="w-11 h-11 rounded-xl bg-purple-100 dark:bg-purple-900/40 text-purple-600 dark:text-purple-400 flex items-center justify-center text-lg group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div>
                                <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider block">Email Address</span>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">sudipanmandal@gmail.com</span>
                            </div>
                        </a>

                        <a href="tel:+916297399473" class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/60 transition group">
                            <div class="w-11 h-11 rounded-xl bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-lg group-hover:scale-105 transition-transform">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider block">Phone / WhatsApp</span>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">+91 6297399473</span>
                            </div>
                        </a>

                        <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/60 transition">
                            <div class="w-11 h-11 rounded-xl bg-emerald-100 dark:bg-emerald-900/40 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-lg">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <span class="text-[11px] font-medium text-slate-400 uppercase tracking-wider block">Location</span>
                                <span class="text-sm font-bold text-slate-900 dark:text-white">Kolkata / Hooghly, West Bengal, India</span>
                            </div>
                        </div>
                    </div>

                    <!-- Social Presence -->
                    <div class="mt-8 pt-6 border-t border-slate-200 dark:border-slate-800">
                        <span class="text-xs font-semibold text-slate-500 dark:text-slate-400 block mb-3 uppercase tracking-wider">
                            Professional Networks
                        </span>
                        <div class="flex items-center gap-3">
                            <a href="https://www.linkedin.com/in/sudipan-mandal" target="_blank" class="px-4 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-300 hover:text-purple-600 dark:hover:text-purple-400 flex items-center gap-2 hover:-translate-y-0.5 transition">
                                <i class="fa-brands fa-linkedin text-blue-600 text-sm"></i> LinkedIn
                            </a>
                            <a href="https://github.com/sudipan-dev-sr" target="_blank" class="px-4 py-2 rounded-xl glass-card text-xs font-medium text-slate-700 dark:text-slate-300 hover:text-purple-600 dark:hover:text-purple-400 flex items-center gap-2 hover:-translate-y-0.5 transition">
                                <i class="fa-brands fa-github text-sm"></i> GitHub
                            </a>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Dynamic AJAX Contact Form -->
            <div class="reveal lg:col-span-7">
                <div class="glass-card p-6 sm:p-8 rounded-2xl border border-slate-200/80 dark:border-slate-800">
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                            Send a Direct Message
                        </h3>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            Live & Active
                        </span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mb-6">
                        Select a quick topic or write custom requirements. I will respond within 24 hours.
                    </p>

                    <!-- Quick Topic Chips -->
                    <div class="mb-5">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2">Quick Subject Select</span>
                        <div class="flex flex-wrap gap-1.5 text-xs">
                            <button type="button" onclick="setQuickSubject('Full-Time Engineering Role', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-purple-500 hover:text-purple-600 transition">⚡ Full-Time Role</button>
                            <button type="button" onclick="setQuickSubject('Climate-Tech MRV Platform', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-emerald-500 hover:text-emerald-600 transition">🌿 Climate MRV</button>
                            <button type="button" onclick="setQuickSubject('Strapi & Node.js Architecture', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-indigo-500 hover:text-indigo-600 transition">🚀 Strapi & Node</button>
                            <button type="button" onclick="setQuickSubject('PostgreSQL / MySQL Query Optimization', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-sky-500 hover:text-sky-600 transition">📊 Database Tuning</button>
                            <button type="button" onclick="setQuickSubject('General Project Collaboration', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-amber-500 hover:text-amber-600 transition">💡 General</button>
                        </div>
                    </div>

                    <!-- Alert message container -->
                    <div id="contactFormAlert" class="hidden mb-6 p-4 rounded-xl text-xs sm:text-sm font-medium transition-all"></div>

                    <form id="contactForm" onsubmit="handleContactSubmit(event)" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">
                                    Your Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       placeholder="e.g. Rahul Sharma" 
                                       class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-purple-500 transition" />
                            </div>

                            <div>
                                <label for="email" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       placeholder="e.g. rahul@company.com" 
                                       class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-purple-500 transition" />
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-semibold text-slate-700 dark:text-slate-300 mb-1.5">
                                Subject / Project Inquiry <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="subject" 
                                   name="subject" 
                                   required
                                   placeholder="e.g. Full-Time Opportunity / Project Discussion" 
                                   class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-purple-500 transition" />
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <label for="message" class="block text-xs font-semibold text-slate-700 dark:text-slate-300">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <span id="homeCharCount" class="text-[11px] text-slate-400">0 / 2000</span>
                            </div>
                            <textarea id="message" 
                                      name="message" 
                                      rows="5" 
                                      required
                                      oninput="document.getElementById('homeCharCount').textContent = this.value.length + ' / 2000'"
                                      placeholder="Write your message here... Feel free to describe your requirements or inquiry." 
                                      class="w-full px-4 py-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 text-slate-900 dark:text-white text-sm focus:outline-none focus:ring-2 focus:ring-purple-500/50 focus:border-purple-500 transition"></textarea>
                        </div>

                        <button type="submit" 
                                id="contactSubmitBtn" 
                                class="w-full btn-primary py-3.5 mt-2 text-sm font-semibold tracking-wide shadow-lg shadow-purple-500/25">
                            <span id="submitBtnText" class="flex items-center justify-center gap-2">
                                <span>Send Direct Message</span>
                                <i class="fa-solid fa-paper-plane text-xs"></i>
                            </span>
                            <span id="submitBtnSpinner" class="hidden flex items-center justify-center gap-2">
                                <i class="fa-solid fa-circle-notch fa-spin text-sm"></i>
                                <span>Transmitting Message...</span>
                            </span>
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= INTERACTIVE PROJECT DETAILS MODAL ================= -->
<div id="projectModal" 
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-md opacity-0 pointer-events-none transition-opacity duration-300" 
     onclick="handleModalBackdrop(event)">
    <div class="glass-card bg-white dark:bg-[#0E131F] w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-3xl border border-slate-200 dark:border-slate-800 shadow-2xl p-6 sm:p-8 transform scale-95 transition-transform duration-300 relative" id="projectModalContent">
        
        <!-- Close Button -->
        <button onclick="closeProjectModal()" 
                class="absolute top-5 right-5 w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-slate-800 dark:hover:text-white transition">
            <i class="fa-solid fa-xmark text-base"></i>
        </button>

        <div id="modalBody">
            <!-- Dynamic Modal Content injected by JS -->
        </div>

    </div>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

