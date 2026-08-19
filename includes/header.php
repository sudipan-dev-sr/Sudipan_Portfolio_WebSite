<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title>Sudipan Mandal | Full Stack PHP & Web Developer Portfolio</title>
    <meta name="title" content="Sudipan Mandal | Full Stack PHP & Web Developer Portfolio">
    <meta name="description" content="Portfolio of Sudipan Mandal - Full Stack PHP Developer specializing in CodeIgniter 4, Laravel, MySQL, REST APIs, and AI integrations. Based in Kolkata.">
    <meta name="keywords" content="Sudipan Mandal, Full Stack Developer, PHP Developer, CodeIgniter 4, Laravel Developer, Kolkata Developer, Web Developer Portfolio, MySQL, OpenAI API, REST APIs">
    <meta name="author" content="Sudipan Mandal">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= BASE_URL ?>assets/favicon.png">
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/favicon.png" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Ovo&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tailwind CSS (compiled) -->
    <link rel="stylesheet" href="<?= BASE_URL ?>output.css">

    <!-- Theme Initialization Script (Prevents FOUC) -->
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="font-Outfit leading-relaxed bg-[#FAF9FB] text-slate-800 dark:bg-[#0B0F17] dark:text-slate-100 transition-colors duration-300 relative overflow-x-hidden">

    <!-- Ambient Mesh Glows (MNC Aesthetic) -->
    <div class="glow-mesh top-0 left-1/4 bg-purple-600 dark:bg-purple-900/40"></div>
    <div class="glow-mesh top-96 right-10 bg-indigo-500 dark:bg-indigo-900/30"></div>
    <div class="glow-mesh top-[1800px] left-10 bg-amber-500/50 dark:bg-purple-900/20"></div>

    <!-- Background Decorative Gradient -->
    <div class="fixed top-0 right-0 w-full lg:w-3/4 -z-10 translate-y-[-70%] opacity-70 pointer-events-none dark:hidden">
        <img src="<?= BASE_URL ?>assets/header-bg-color.png" alt="" class="w-full" />
    </div>

    <!-- ================= TOP NAVBAR ================= -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="headerNav">
        <nav id="navbar" class="w-full px-5 sm:px-8 lg:px-[8%] py-3.5 flex items-center justify-between transition-all duration-300">

            <!-- Logo Brand -->
            <a href="<?= BASE_URL ?>" class="flex items-center gap-2.5 group">
                <span class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 via-indigo-600 to-amber-500 text-white flex items-center justify-center font-bold text-lg shadow-md shadow-purple-500/20 group-hover:scale-105 transition-transform">
                    SM
                </span>
                <div class="flex flex-col">
                    <span class="text-lg font-bold tracking-tight text-slate-900 dark:text-white flex items-center gap-1.5">
                        Sudipan Mandal
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    </span>
                    <span class="text-[11px] font-medium text-slate-500 dark:text-slate-400 -mt-1 tracking-wider uppercase">
                        Full Stack Engineer
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (Pill Style) -->
            <ul id="navLink" class="hidden lg:flex items-center gap-1 xl:gap-2 rounded-full px-5 py-2 glass-card shadow-sm border border-slate-200/80 dark:border-slate-800 font-medium text-sm text-slate-600 dark:text-slate-300">
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#top">Home</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#about">About</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#experience">Experience</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#services">Services</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#skills">Skills</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#work">Projects</a></li>
                <li><a class="nav-item px-3.5 py-1.5 rounded-full hover:text-purple-600 dark:hover:text-purple-400 hover:bg-purple-50/70 dark:hover:bg-slate-800 transition" href="#contact">Contact</a></li>
            </ul>

            <!-- Right Controls -->
            <div class="flex items-center gap-3">
                <!-- Theme Toggle Button -->
                <button onclick="toggleTheme()" 
                        aria-label="Toggle Dark Mode"
                        class="w-10 h-10 rounded-full flex items-center justify-center border border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 text-slate-600 dark:text-slate-300 hover:text-purple-600 dark:hover:text-purple-400 hover:scale-105 transition-all shadow-sm">
                    <i class="fa-solid fa-moon text-base dark:hidden"></i>
                    <i class="fa-solid fa-sun text-base hidden dark:block text-amber-400"></i>
                </button>

                <!-- Let's Talk CTA -->
                <a href="#contact" 
                   class="hidden sm:inline-flex items-center gap-2 px-5 py-2 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 shadow-md shadow-purple-500/20 hover:shadow-purple-500/35 transition-all">
                    <span>Let's Talk</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </a>

                <!-- Mobile Menu Button -->
                <button class="flex lg:hidden w-10 h-10 rounded-xl items-center justify-center border border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/80 text-slate-700 dark:text-slate-200" 
                        onclick="openMenu()" 
                        aria-label="Open Navigation Menu">
                    <i class="fa-solid fa-bars-staggered text-lg"></i>
                </button>
            </div>
        </nav>
    </header>

    <!-- ================= MOBILE DRAWER OVERLAY ================= -->
    <div id="mobileMenuBackdrop" 
         onclick="closeMenu()" 
         class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden">
    </div>

    <!-- ================= MOBILE MENU DRAWER ================= -->
    <aside id="mobileMenu"
           class="fixed top-0 right-0 bottom-0 w-72 max-w-[85vw] bg-white/95 dark:bg-[#0E131F]/95 backdrop-blur-2xl z-50 p-6 flex flex-col justify-between transform translate-x-full transition-transform duration-300 ease-out shadow-2xl border-l border-slate-200/80 dark:border-slate-800 lg:hidden">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-slate-200 dark:border-slate-800">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-8 rounded-lg bg-gradient-to-tr from-purple-600 to-indigo-600 text-white flex items-center justify-center font-bold text-sm">
                        SM
                    </span>
                    <span class="font-bold text-sm text-slate-900 dark:text-white">Navigation</span>
                </div>
                <button onclick="closeMenu()" 
                        aria-label="Close menu"
                        class="w-8 h-8 rounded-full flex items-center justify-center text-slate-500 hover:text-slate-800 dark:hover:text-white bg-slate-100 dark:bg-slate-800">
                    <i class="fa-solid fa-xmark text-base"></i>
                </button>
            </div>

            <ul class="flex flex-col gap-2 mt-6 font-medium text-slate-700 dark:text-slate-200">
                <li><a href="#top" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-house w-5 text-purple-500"></i> Home</a></li>
                <li><a href="#about" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-user w-5 text-indigo-500"></i> About</a></li>
                <li><a href="#experience" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-briefcase w-5 text-amber-500"></i> Experience</a></li>
                <li><a href="#services" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-cubes w-5 text-pink-500"></i> Services</a></li>
                <li><a href="#skills" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-code w-5 text-cyan-500"></i> Skills</a></li>
                <li><a href="#work" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-laptop-code w-5 text-emerald-500"></i> Projects</a></li>
                <li><a href="#contact" onclick="closeMenu()" class="flex items-center gap-3 px-4 py-2.5 rounded-xl hover:bg-purple-50 dark:hover:bg-slate-800/80 hover:text-purple-600 dark:hover:text-purple-400 transition"><i class="fa-solid fa-envelope w-5 text-purple-500"></i> Contact</a></li>
            </ul>
        </div>

        <div class="pt-6 border-t border-slate-200 dark:border-slate-800 flex flex-col gap-3">
            <a href="<?= BASE_URL ?>assets/Resume/Sudipan_Mandal_FullStack_PHP_Developer_CV.pdf" 
               target="_blank" 
               class="w-full btn-outline text-xs py-2.5 flex items-center justify-center gap-2">
                <i class="fa-solid fa-file-arrow-down"></i>
                Download Resume
            </a>
            <div class="flex items-center justify-center gap-4 text-slate-500 dark:text-slate-400 text-lg pt-2">
                <a href="https://github.com/sudipan-dev-sr" target="_blank" class="hover:text-purple-600"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/sudipan-mandal" target="_blank" class="hover:text-purple-600"><i class="fa-brands fa-linkedin"></i></a>
                <a href="mailto:sudipanmandal@gmail.com" class="hover:text-purple-600"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </aside>

