<?php
include 'includes/header.php';
?>

<!-- ================= MOBILE MENU ================= -->
<ul id="mobileMenu"
    class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0 bottom-0 w-64 z-50 h-screen bg-rose-50 transition duration-500 font-Ovo dark:bg-darkHover dark:text-white">

    <div class="absolute right-6 top-6" onclick="closeMenu()">
        <img src="<?= BASE_URL ?>assets/close-black.png" class="w-5 cursor-pointer dark:hidden" />
        <img src="<?= BASE_URL ?>assets/close-white.png" class="w-5 cursor-pointer hidden dark:block" />
    </div>

    <li><a href="#top" onclick="closeMenu()">Home</a></li>
    <li><a href="#about" onclick="closeMenu()">About me</a></li>
    <li><a href="#services" onclick="closeMenu()">Services</a></li>
    <li><a href="#work" onclick="closeMenu()">My Work</a></li>
    <li><a href="#contact" onclick="closeMenu()">Contact me</a></li>
</ul>

<!-- ================= HOME SECTION ================= -->
<div id="top"
     class="pt-32 w-11/12 max-w-3xl text-center mx-auto h-screen flex flex-col items-center justify-center gap-4">

    <img src="<?= BASE_URL ?>assets/profile-img.png" class="rounded-full w-32" />

    <!-- <h3 class="flex items-end gap-2 text-xl md:text-2xl mb-3 font-Ovo">
        Hi! I&apos;m Sudipan Mandal
        <img src="<?= BASE_URL ?>assets/hand-icon.png" class="w-6 mb-1" />
    </h3> -->
    <h3 class="flex items-end gap-2 text-xl md:text-2xl mb-3 font-Ovo">
        <span id="typing-text"></span>
        <img src="<?= BASE_URL ?>assets/hand-icon.png" class="w-6 mb-1" />
    </h3>


    <h1 class="text-3xl sm:text-6xl lg:text-[66px] font-Ovo">
        Full Stack Developer based in Kolkata.
    </h1>

    <p class="max-w-2xl mx-auto font-Ovo">
        I am a Full Stack PHP Developer with hands-on experience in PHP, CodeIgniter, MySQL, and modern frontend technologies. I enjoy building clean, maintainable, and user-focused web solutions.
    </p>

    <div class="flex flex-col sm:flex-row items-center gap-4 mt-4">
        <a href="#contact"
           class="px-10 py-2.5 border rounded-full bg-gradient-to-r from-[#b820e6] to-[#da7d20] text-white flex items-center gap-2">
            Contact me
            <img src="<?= BASE_URL ?>assets/right-arrow-white.png" class="w-4" />
        </a>

        <!-- <a href="<?= BASE_URL ?>assets/Resume/Sudipan_Mandal_FullStack_PHP_Developer_CV.pdf" download
           class="px-10 py-2.5 rounded-full border border-gray-300 dark:border-white/25 hover:bg-slate-100/70 dark:hover:bg-darkHover flex items-center gap-2">
            My resume
            <img src="<?= BASE_URL ?>assets/download-icon.png" class="w-4 dark:invert" />
        </a> -->
        <a href="<?= BASE_URL ?>assets/Resume/Sudipan_Mandal_FullStack_PHP_Developer_CV.pdf"
            target="_blank"
            rel="noopener noreferrer"
            class="px-10 py-2.5 rounded-full border border-gray-300 dark:border-white/25 hover:bg-slate-100/70 dark:hover:bg-darkHover flex items-center gap-2">
                View resume
                <img src="<?= BASE_URL ?>assets/download-icon.png" class="w-4 dark:invert" />
        </a>
    </div>
</div>



<!-- Contact me section -->
    <div id="contact"
        class="w-full px-[12%] py-10 scroll-mt-20 bg-[url('./assets/footer-bg-color.png')] bg-no-repeat bg-[length:90%_auto] bg-center dark:bg-none">
        <h4 class="text-center mb-2 text-lg font-Ovo">Connect with me</h4>
        <h2 class="text-center text-5xl font-Ovo">Get in touch</h2>
        <p class="text-center max-w-2xl mx-auto mt-5 mb-12 font-Ovo">I'd love to hear from you! If you have any
            questions, comments or feedback, please use the form below.
        </p>
        <form class="max-w-2xl mx-auto">
            <input type="hidden" name="subject" value="Eliana Jade - New form Submission">
            <div class="grid grid-cols-auto gap-6 mt-10 mb-8">
                <input type="text" placeholder="Enter your name"
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30"
                    ] required="" name="name">
                <input type="email" placeholder="Enter your email" ]
                    class="flex-1 px-3 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white dark:bg-darkHover/30"
                    required="" name="email">
            </div>
            <textarea rows="6" placeholder="Enter your message"
                class="w-full px-4 py-2 focus:ring-1 outline-none border border-gray-300 dark:border-white/30 rounded-md bg-white mb-6 dark:bg-darkHover/30"
                required="" name="message"></textarea>
            <button type="submit"
                class="py-2 px-8 w-max flex items-center justify-between gap-2 bg-black/80 text-white rounded-full mx-auto hover:bg-black duration-500 dark:bg-transparent dark:border dark:border-white/30 dark:hover:bg-darkHover">
                Submit now
                <img src="./assets/right-arrow-white.png" alt="" class="w-4">
            </button>
            <p class="mt-4"></p>
        </form>
    </div>

<script src="<?= BASE_URL ?>script.js"></script>
<script>
    const text = "Hi! I'm Sudipan Mandal";
    const speed = 80; // typing speed (ms)
    let index = 0;

    function typeEffect() {
        if (index < text.length) {
            document.getElementById("typing-text").innerHTML += text.charAt(index);
            index++;
            setTimeout(typeEffect, speed);
        }
    }

    document.addEventListener("DOMContentLoaded", typeEffect);
</script>

</body>
</html>
<?php
include 'includes/header.php';
?>
