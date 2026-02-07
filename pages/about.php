<?php
include __DIR__ . '/../includes/header.php';
?>

<!-- ----- about me section ------ -->
<div id="about" class="w-full px-[12%] py-10 scroll-mt-20">

    <h4 class="text-center mb-2 text-lg font-Ovo">Introduction</h4>
    <h2 class="text-center text-5xl font-Ovo">About me</h2>

    <div class="flex w-full flex-col lg:flex-row items-center gap-20 my-20">

        <!-- Profile Image -->
        <div class="max-w-max mx-auto relative">
            <img src="<?= BASE_URL ?>assets/user-image.png"
                 alt="User profile image"
                 class="w-64 sm:w-80 rounded-3xl max-w-none">

            <div
                class="bg-white w-1/2 aspect-square absolute right-0 bottom-0 rounded-full translate-x-1/4 translate-y-1/3 shadow-[0_4px_55px_rgba(149,0,162,0.15)] flex items-center justify-center">

                <img src="<?= BASE_URL ?>assets/circular-text.png"
                     alt="Circular text"
                     class="w-full animate-spin_slow">

                <img src="<?= BASE_URL ?>assets/dev-icon.png"
                     alt="Developer icon"
                     class="w-1/4 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1">

            <p class="mb-10 max-w-2xl font-Ovo">
                I am an experienced Frontend Developer with over a decade of professional expertise.
                I have collaborated with prestigious organizations and contributed to scalable,
                high-quality digital products.
            </p>

            <!-- Cards -->
            <ul class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-2xl">

                <li
                    class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">

                    <img src="<?= BASE_URL ?>assets/code-icon.png" alt="Languages icon" class="w-7 mt-3 dark:hidden">
                    <img src="<?= BASE_URL ?>assets/code-icon-dark.png" alt="Languages icon" class="w-7 mt-3 hidden dark:block">

                    <h3 class="my-4 font-semibold text-gray-700 dark:text-white">Languages</h3>
                    <p class="text-gray-600 text-sm dark:text-white/80">
                        HTML, CSS, JavaScript, React, Next.js
                    </p>
                </li>

                <li
                    class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">

                    <img src="<?= BASE_URL ?>assets/edu-icon.png" alt="Education icon" class="w-7 mt-3 dark:hidden">
                    <img src="<?= BASE_URL ?>assets/edu-icon-dark.png" alt="Education icon" class="w-7 mt-3 hidden dark:block">

                    <h3 class="my-4 font-semibold text-gray-700 dark:text-white">Education</h3>
                    <p class="text-gray-600 text-sm dark:text-white/80">
                        B.Tech in Computer Science
                    </p>
                </li>

                <li
                    class="border border-gray-300 dark:border-white/30 rounded-xl p-6 cursor-pointer hover:bg-lightHover hover:-translate-y-1 duration-500 hover:shadow-black dark:hover:shadow-white/80 dark:hover:bg-darkHover/50">

                    <img src="<?= BASE_URL ?>assets/project-icon.png" alt="Projects icon" class="w-7 mt-3 dark:hidden">
                    <img src="<?= BASE_URL ?>assets/project-icon-dark.png" alt="Projects icon" class="w-7 mt-3 hidden dark:block">

                    <h3 class="my-4 font-semibold text-gray-700 dark:text-white">Projects</h3>
                    <p class="text-gray-600 text-sm dark:text-white/80">
                        Built more than 5 projects
                    </p>
                </li>

            </ul>

            <!-- Tools -->
            <h4 class="my-6 text-gray-700 font-Ovo dark:text-white/80">Tools I use</h4>

            <ul class="flex items-center gap-3 sm:gap-5">

                <?php
                $tools = ['vscode', 'firebase', 'mongodb', 'figma', 'git'];
                foreach ($tools as $tool):
                ?>
                    <li
                        class="flex items-center justify-center w-12 sm:w-14 aspect-square border border-gray-300 dark:border-white/30 rounded-lg cursor-pointer hover:-translate-y-1 duration-500">
                        <img src="<?= BASE_URL ?>assets/<?= $tool ?>.png"
                             alt="<?= ucfirst($tool) ?>"
                             class="w-5 sm:w-7">
                    </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </div>
</div>
<script src="<?= BASE_URL ?>script.js"></script>
</body>
</html>
