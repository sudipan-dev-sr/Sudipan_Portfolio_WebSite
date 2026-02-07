<!-- <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliana Portfolio - PrebuiltUI</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./input.css">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
</head>

<body class="font-Outfit leading-8 dark:bg-darkTheme dark:text-white">
    <div class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden">
        <img src="./assets/header-bg-color.png" alt="" class="w-full" />
    </div>

    <nav id="navbar" class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-4 flex items-center justify-between z-50">
        <p class="bg-white bg-opacity-50 backdrop-blur-lg shadow-sm dark:bg-darkTheme dark:shadow-white/20 sr-only">
            Hidden</p>
        <a href="#!">
            <img src="./assets/logo.png" alt="Logo" class="w-28 cursor-pointer mr-14 dark:hidden" />
            <img src="./assets/logo_dark.png" alt="Logo" class="w-28 cursor-pointer mr-14 hidden dark:block" />
        </a>

        <ul id="navLink"
            class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white shadow-sm bg-opacity-50 font-Ovo dark:border dark:border-white/30 dark:bg-transparent ">
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#top">Home</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="./pages/about.php">About me</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#services">Services</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#work">My Work</a></li>
            <li><a class='hover:text-gray-500 dark:hover:text-gray-300 transition' href="#contact">Contact me</a></li>
        </ul>

        <div class="flex items-center gap-4">
            <button onclick="toggleTheme()">
                <img src="./assets/moon_icon.png" alt="" class="w-5 dark:hidden" />
                <img src="./assets/sun_icon.png" alt="" class="w-5 hidden dark:block" />
            </button>

            <a href="#contact"
                class="hidden lg:flex items-center gap-3 px-8 py-1.5 border border-gray-300 hover:bg-slate-100/70 dark:hover:bg-darkHover rounded-full ml-4 font-Ovo dark:border-white/30">
                Contact
                <img src="./assets/arrow-icon.png" alt="" class="w-3 dark:hidden" />
                <img src="./assets/arrow-icon-dark.png" alt="" class="w-3 hidden dark:block" />
            </a>

            <button class="block md:hidden ml-3" onclick="openMenu()">
                <img src="./assets/menu-black.png" alt="" class="w-6 dark:hidden" />
                <img src="./assets/menu-white.png" alt="" class="w-6 hidden dark:block" />
            </button>

        </div> -->


   <?php
// XAMPP base path
define('BASE_URL', '/Portfolio/Sudipan_Portfolio_WebSite/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliana Portfolio - PrebuiltUI</title>

    <!-- Tailwind CSS (compiled) -->
    <link rel="stylesheet" href="<?= BASE_URL ?>output.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASE_URL ?>assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
</head>

<body class="font-Outfit leading-8 dark:bg-darkTheme dark:text-white">

<!-- Background -->
<div class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden">
    <img src="<?= BASE_URL ?>assets/header-bg-color.png" alt="" class="w-full" />
</div>

<!-- NAVBAR -->
<nav id="navbar" class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-4 flex items-center justify-between z-50">

    <p class="bg-white bg-opacity-50 backdrop-blur-lg shadow-sm dark:bg-darkTheme dark:shadow-white/20 sr-only">
        Hidden
    </p>

    <!-- Logo -->
    <a href="<?= BASE_URL ?>">
        <img src="<?= BASE_URL ?>assets/logo.png" alt="Logo" class="w-28 cursor-pointer mr-14 dark:hidden" />
        <img src="<?= BASE_URL ?>assets/logo_dark.png" alt="Logo" class="w-28 cursor-pointer mr-14 hidden dark:block" />
    </a>

    <!-- Desktop Menu -->
    <ul id="navLink"
        class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-3 bg-white shadow-sm bg-opacity-50 font-Ovo dark:border dark:border-white/30 dark:bg-transparent">
        <li><a class="hover:text-gray-500 dark:hover:text-gray-300 transition" href="<?= BASE_URL ?>#top">Home</a></li>
        <li><a class="hover:text-gray-500 dark:hover:text-gray-300 transition" href="<?= BASE_URL ?>pages/about.php">About me</a></li>
        <li><a class="hover:text-gray-500 dark:hover:text-gray-300 transition" href="<?= BASE_URL ?>#services">Services</a></li>
        <li><a class="hover:text-gray-500 dark:hover:text-gray-300 transition" href="<?= BASE_URL ?>#work">My Work</a></li>
        <li><a class="hover:text-gray-500 dark:hover:text-gray-300 transition" href="<?= BASE_URL ?>#contact">Contact me</a></li>
    </ul>

    <!-- Right actions -->
    <div class="flex items-center gap-4">

        <!-- Theme toggle -->
        <button onclick="toggleTheme()">
            <img src="<?= BASE_URL ?>assets/moon_icon.png" alt="" class="w-5 dark:hidden" />
            <img src="<?= BASE_URL ?>assets/sun_icon.png" alt="" class="w-5 hidden dark:block" />
        </button>

        <!-- Contact button -->
        <a href="<?= BASE_URL ?>#contact"
           class="hidden lg:flex items-center gap-3 px-8 py-1.5 border border-gray-300 hover:bg-slate-100/70 dark:hover:bg-darkHover rounded-full ml-4 font-Ovo dark:border-white/30">
            Contact
            <img src="<?= BASE_URL ?>assets/arrow-icon.png" alt="" class="w-3 dark:hidden" />
            <img src="<?= BASE_URL ?>assets/arrow-icon-dark.png" alt="" class="w-3 hidden dark:block" />
        </a>

        <!-- Mobile menu button -->
        <button class="block md:hidden ml-3" onclick="openMenu()">
            <img src="<?= BASE_URL ?>assets/menu-black.png" alt="" class="w-6 dark:hidden" />
            <img src="<?= BASE_URL ?>assets/menu-white.png" alt="" class="w-6 hidden dark:block" />
        </button>

    </div>
</nav>
