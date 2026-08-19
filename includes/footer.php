

<!-- ================= MNC ENTERPRISE FOOTER ================= -->
<footer class="bg-slate-900/90 dark:bg-[#070A10] text-slate-400 border-t border-slate-800/80 relative mt-20 z-10">
    <div class="max-w-6xl mx-auto px-5 sm:px-8 lg:px-[8%] py-14">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            
            <!-- Brand Column -->
            <div class="lg:col-span-2 space-y-4">
                <a href="<?= BASE_URL ?>" class="flex items-center gap-2.5">
                    <span class="w-9 h-9 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white flex items-center justify-center font-bold text-base shadow-md">
                        SM
                    </span>
                    <span class="text-xl font-bold text-white tracking-tight">
                        Sudipan Mandal
                    </span>
                </a>
                
                <p class="text-xs sm:text-sm text-slate-400 max-w-md leading-relaxed">
                    Full Stack PHP Developer with hands-on experience in CodeIgniter 4, Laravel, MySQL, RESTful APIs, and OpenAI integrations. Building scalable, secure, and user-centric web applications.
                </p>

                <!-- Live Status Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950/50 border border-emerald-500/30 text-emerald-400 text-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Open for Opportunities & Collaborations</span>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div>
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">
                    Quick Links
                </h4>
                <ul class="space-y-2 text-xs sm:text-sm font-medium">
                    <li><a href="#top" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Home</a></li>
                    <li><a href="#about" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> About</a></li>
                    <li><a href="#experience" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Experience</a></li>
                    <li><a href="#services" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Services</a></li>
                    <li><a href="#skills" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Skills</a></li>
                    <li><a href="#work" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Projects</a></li>
                    <li><a href="#contact" class="hover:text-purple-400 transition flex items-center gap-1.5"><i class="fa-solid fa-chevron-right text-[10px] text-purple-500"></i> Contact</a></li>
                </ul>
            </div>

            <!-- Connect & Social -->
            <div>
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">
                    Connect
                </h4>
                <ul class="space-y-2.5 text-xs sm:text-sm">
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-purple-400"></i>
                        <a href="mailto:sudipanmandal@gmail.com" class="hover:text-white transition truncate">
                            sudipanmandal@gmail.com
                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-phone text-indigo-400"></i>
                        <a href="tel:+916297399473" class="hover:text-white transition">
                            +91 6297399473
                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-emerald-400"></i>
                        <span>Kolkata, India</span>
                    </li>
                </ul>

                <!-- Social Icons -->
                <div class="flex items-center gap-3 mt-5">
                    <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 text-slate-300 hover:text-white hover:bg-purple-600 flex items-center justify-center transition" title="GitHub">
                        <i class="fa-brands fa-github text-sm"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/sudipan-mandal" target="_blank" class="w-8 h-8 rounded-lg bg-slate-800 text-slate-300 hover:text-white hover:bg-purple-600 flex items-center justify-center transition" title="LinkedIn">
                        <i class="fa-brands fa-linkedin text-sm"></i>
                    </a>
                    <a href="mailto:sudipanmandal@gmail.com" class="w-8 h-8 rounded-lg bg-slate-800 text-slate-300 hover:text-white hover:bg-purple-600 flex items-center justify-center transition" title="Email">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Back-to-Top -->
        <div class="border-t border-slate-800 mt-12 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© <?= date('Y') ?> Sudipan Mandal. Built with PHP, Tailwind CSS & JavaScript. All rights reserved.</p>
            <a href="#top" class="hover:text-purple-400 transition flex items-center gap-1 font-medium">
                <span>Back to Top</span>
                <i class="fa-solid fa-arrow-up text-[10px]"></i>
            </a>
        </div>

    </div>
</footer>

<!-- Scripts -->
<script src="<?= BASE_URL ?>script.js"></script>
</body>
</html>

