<?php
$pageTitle = "Get In Touch | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
$presetSubject = isset($_GET['subject']) ? htmlspecialchars($_GET['subject']) : '';
?>

<!-- ================= CONTACT HERO ================= -->
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
            <span class="text-purple-600 dark:text-purple-400">Contact</span>
        </nav>

        <span class="gradient-badge mb-4">Start a Conversation</span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            Let's Build Something <span class="gradient-text">Exceptional</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
            Have a project, architectural consultation, or career opportunity? Send a message below and I'll get back to you within 24 hours.
        </p>
    </div>
</section>

<!-- ================= CONTACT GRID & FORM ================= -->
<section class="py-12 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10">
        
        <!-- Left: Contact Channels & Location (5 cols) -->
        <div class="lg:col-span-5 space-y-6">
            
            <div class="glass-card p-8 rounded-3xl border border-slate-200/80 dark:border-slate-800 space-y-6">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">
                    Direct Channels
                </h3>

                <!-- Channel 1: Email -->
                <a href="mailto:sudipanmandal@gmail.com" class="flex items-start gap-4 p-4 rounded-2xl glass-card border border-slate-200 dark:border-slate-800 hover:border-purple-500/50 transition group">
                    <span class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 flex items-center justify-center text-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <div>
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Email Address</span>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition">sudipanmandal@gmail.com</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Response within 24 hours</p>
                    </div>
                </a>

                <!-- Channel 2: Phone / WhatsApp -->
                <a href="tel:+916297399473" class="flex items-start gap-4 p-4 rounded-2xl glass-card border border-slate-200 dark:border-slate-800 hover:border-emerald-500/50 transition group">
                    <span class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-lg flex-shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fa-brands fa-whatsapp"></i>
                    </span>
                    <div>
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Phone & WhatsApp</span>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition">+91 6297399473</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Direct line for technical discussions</p>
                    </div>
                </a>

                <!-- Channel 3: Location -->
                <div class="flex items-start gap-4 p-4 rounded-2xl glass-card border border-slate-200 dark:border-slate-800">
                    <span class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-lg flex-shrink-0">
                        <i class="fa-solid fa-location-dot"></i>
                    </span>
                    <div>
                        <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Base Location</span>
                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Kolkata, India</h4>
                        <p class="text-[11px] text-slate-500 mt-0.5">Sector V, Salt Lake (IST Timezone UTC+5:30)</p>
                    </div>
                </div>

                <!-- Professional Profiles -->
                <div class="pt-4 border-t border-slate-200 dark:border-slate-800">
                    <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider block mb-3">Professional Profiles</span>
                    <div class="flex items-center gap-3">
                        <a href="https://github.com/sudipan-dev-sr" target="_blank" class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-purple-600 hover:text-white flex items-center justify-center text-base transition" title="GitHub">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/sudipan-mandal" target="_blank" class="w-10 h-10 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:bg-purple-600 hover:text-white flex items-center justify-center text-base transition" title="LinkedIn">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

        <!-- Right: AJAX Contact Form (7 cols) -->
        <div class="lg:col-span-7">
            <div class="glass-card p-8 sm:p-10 rounded-3xl border border-slate-200/80 dark:border-slate-800 relative">
                
                <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">
                    Send a Message
                </h3>
                <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mb-8">
                    Fill in your details below and I will get back to you promptly.
                </p>

                <!-- Feedback Alert Box -->
                <div id="contactFormStatus" class="hidden p-4 rounded-2xl mb-6 text-xs font-medium"></div>

                <form id="standaloneContactForm" onsubmit="handleContactPageSubmit(event)" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Full Name -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                                Your Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="senderName" 
                                   name="name" 
                                   required 
                                   placeholder="e.g. Alexander Vance" 
                                   class="w-full px-4 py-3 rounded-xl glass-card border border-slate-200 dark:border-slate-700 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 transition">
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" 
                                   id="senderEmail" 
                                   name="email" 
                                   required 
                                   placeholder="name@company.com" 
                                   class="w-full px-4 py-3 rounded-xl glass-card border border-slate-200 dark:border-slate-700 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 transition">
                        </div>
                    </div>

                    <!-- Quick Subject Chips -->
                    <div class="mb-5">
                        <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400 block mb-2">Quick Topic Select</span>
                        <div class="flex flex-wrap gap-1.5 text-xs">
                            <button type="button" onclick="setContactSubject('Headless CMS & Strapi Architecture', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-indigo-500 hover:text-indigo-600 transition">🚀 Strapi & Headless CMS</button>
                            <button type="button" onclick="setContactSubject('Climate-Tech MRV Platform', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-emerald-500 hover:text-emerald-600 transition">🌿 Climate MRV Platform</button>
                            <button type="button" onclick="setContactSubject('Full-Stack Web Engineering Role', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-purple-500 hover:text-purple-600 transition">⚡ Full-Stack Opportunity</button>
                            <button type="button" onclick="setContactSubject('PostgreSQL / MySQL Query Optimization', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-sky-500 hover:text-sky-600 transition">📊 Database Optimization</button>
                            <button type="button" onclick="setContactSubject('AI & OpenAI Integration Project', this)" class="quick-sub-btn px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-slate-600 dark:text-slate-300 hover:border-amber-500 hover:text-amber-600 transition">🤖 AI & LLM Project</button>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                            Project Subject / Topic <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="senderSubject" 
                               name="subject" 
                               value="<?= $presetSubject ?>" 
                               required 
                               placeholder="e.g. Headless CMS Architecture / Full-Stack Role" 
                               class="w-full px-4 py-3 rounded-xl glass-card border border-slate-200 dark:border-slate-700 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 transition">
                    </div>

                    <!-- Message -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300">
                                Message Details <span class="text-red-500">*</span>
                            </label>
                            <span id="charCount" class="text-[11px] text-slate-400">0 / 2000</span>
                        </div>
                        <textarea id="senderMessage" 
                                  name="message" 
                                  rows="5" 
                                  required 
                                  oninput="updateCharCount(this)" 
                                  placeholder="Describe your engineering goals, project scope, or technical requirements..." 
                                  class="w-full px-4 py-3 rounded-xl glass-card border border-slate-200 dark:border-slate-700 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 transition resize-y"></textarea>
                    </div>

                    <button type="submit" 
                            id="submitContactBtn" 
                            class="w-full btn-primary text-xs py-3.5 flex items-center justify-center gap-2 shadow-lg shadow-purple-500/25">
                        <i class="fa-regular fa-paper-plane"></i>
                        <span>Transmit Message</span>
                    </button>
                </form>

            </div>
        </div>

    </div>
</section>

<!-- ================= INTERACTIVE FAQ ACCORDION ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] bg-slate-100/50 dark:bg-slate-900/30">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <span class="gradient-badge mb-2">Frequently Asked Questions</span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">
                Technical Collaboration <span class="gradient-text">FAQs</span>
            </h2>
        </div>

        <div class="space-y-4">
            
            <!-- FAQ 1 -->
            <div class="glass-card rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                <button type="button" onclick="toggleFaq(this)" class="w-full p-6 text-left flex items-center justify-between gap-4">
                    <span class="font-bold text-sm sm:text-base text-slate-900 dark:text-white">What is your primary engineering stack?</span>
                    <i class="fa-solid fa-chevron-down text-xs text-purple-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200/50 dark:border-slate-800/50 pt-4">
                    My core specialization is <strong>Node.js, Strapi Headless CMS, TypeScript, JavaScript, PostgreSQL, PHP 8, CodeIgniter 4, Laravel, and MySQL</strong>. I also integrate AI models via the OpenAI API and develop responsive modern UIs using Tailwind CSS and React.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="glass-card rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                <button type="button" onclick="toggleFaq(this)" class="w-full p-6 text-left flex items-center justify-between gap-4">
                    <span class="font-bold text-sm sm:text-base text-slate-900 dark:text-white">What kind of roles and projects are you open to?</span>
                    <i class="fa-solid fa-chevron-down text-xs text-purple-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200/50 dark:border-slate-800/50 pt-4">
                    I am open to full-time engineering roles, technical consultations, and high-impact software projects—especially in Headless CMS architecture, Climate-Tech data systems, scalable REST APIs, and modern full-stack web platforms.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="glass-card rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                <button type="button" onclick="toggleFaq(this)" class="w-full p-6 text-left flex items-center justify-between gap-4">
                    <span class="font-bold text-sm sm:text-base text-slate-900 dark:text-white">How do you approach database performance and optimization?</span>
                    <i class="fa-solid fa-chevron-down text-xs text-purple-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200/50 dark:border-slate-800/50 pt-4">
                    I perform query profiling using `EXPLAIN ANALYZE`, establish compound/composite indexes, normalize data structures, implement foreign key constraints for integrity, and utilize caching strategies (e.g. Redis) to ensure low-latency sub-100ms response times.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="glass-card rounded-2xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                <button type="button" onclick="toggleFaq(this)" class="w-full p-6 text-left flex items-center justify-between gap-4">
                    <span class="font-bold text-sm sm:text-base text-slate-900 dark:text-white">Can you build both backend APIs and frontend user interfaces?</span>
                    <i class="fa-solid fa-chevron-down text-xs text-purple-600 transition-transform duration-300"></i>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200/50 dark:border-slate-800/50 pt-4">
                    Yes. While my core strength is backend engineering, RESTful architecture, and database design, I build clean, accessible, glassmorphic frontends using Tailwind CSS, TypeScript, and modern JavaScript (ES6+ / React).
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function setContactSubject(subText, btn) {
    const subInput = document.getElementById('senderSubject');
    if (subInput) {
        subInput.value = subText;
        subInput.focus();
    }
    document.querySelectorAll('.quick-sub-btn').forEach(b => {
        b.classList.remove('border-purple-500', 'bg-purple-50', 'dark:bg-purple-950/40', 'text-purple-700', 'dark:text-purple-300', 'font-semibold');
    });
    if (btn) {
        btn.classList.add('border-purple-500', 'bg-purple-50', 'dark:bg-purple-950/40', 'text-purple-700', 'dark:text-purple-300', 'font-semibold');
    }
}

function updateCharCount(textarea) {
    const count = textarea.value.length;
    document.getElementById('charCount').textContent = count + ' / 2000';
}

function toggleFaq(btn) {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector('i');
    const isHidden = content.classList.contains('hidden');

    if (isHidden) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}

async function handleContactPageSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('standaloneContactForm');
    const btn = document.getElementById('submitContactBtn');
    const status = document.getElementById('contactFormStatus');
    const originalContent = btn.innerHTML;

    btn.disabled = true;
    btn.innerHTML = '<i class="fa-solid fa-spinner animate-spin mr-2"></i> <span>Transmitting Message...</span>';
    status.className = 'hidden';

    const formData = new FormData(form);
    const endpoint = (typeof window !== 'undefined' && window.BASE_URL) ? `${window.BASE_URL}pages/contact_process.php` : "pages/contact_process.php";

    try {
        const response = await fetch(endpoint, {
            method: 'POST',
            body: formData
        });
        const result = await response.json();

        if (result.success) {
            status.className = 'p-4 rounded-2xl mb-6 text-xs font-semibold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30 flex items-center gap-2 block animate-fadeIn';
            status.innerHTML = `<i class="fa-solid fa-circle-check text-base text-emerald-500"></i> <span>${result.message}</span>`;
            form.reset();
            document.getElementById('charCount').textContent = '0 / 2000';
        } else {
            status.className = 'p-4 rounded-2xl mb-6 text-xs font-semibold bg-red-100 dark:bg-red-950/60 text-red-700 dark:text-red-300 border border-red-500/30 flex items-center gap-2 block';
            status.innerHTML = `<i class="fa-solid fa-circle-exclamation text-base text-red-500"></i> <span>${result.message || 'An error occurred. Please try again.'}</span>`;
        }
    } catch (err) {
        status.className = 'p-4 rounded-2xl mb-6 text-xs font-semibold bg-red-100 dark:bg-red-950/60 text-red-700 dark:text-red-300 border border-red-500/30 flex items-center gap-2 block';
        status.innerHTML = `<i class="fa-solid fa-triangle-exclamation text-base text-red-500"></i> <span>Network error. Please email directly at <a href="mailto:sudipanmandal@gmail.com" class="underline font-bold">sudipanmandal@gmail.com</a>.</span>`;
    } finally {
        btn.disabled = false;
        btn.innerHTML = originalContent;
    }
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
