<?php
$pageTitle = "Engineering Insights & Articles | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= BLOG HERO ================= -->
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
            <span class="text-purple-600 dark:text-purple-400">Tech Blog</span>
        </nav>

        <span class="gradient-badge mb-4">Engineering Notes & Deep Dives</span>
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            Technical Insights & <span class="gradient-text">Architectures</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-2xl mx-auto text-sm sm:text-base leading-relaxed">
            Practical takeaways on Headless CMS, PostgreSQL query optimization, TypeScript patterns, Climate-Tech MRV pipelines, and AI engineering.
        </p>

        <!-- Live Blog Search & Filters -->
        <div class="reveal mt-10 max-w-3xl mx-auto space-y-4">
            <div class="relative">
                <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                <input type="text" 
                       id="blogSearchInput" 
                       oninput="filterBlogArticles()" 
                       placeholder="Search articles by topic (e.g. Strapi, PostgreSQL, TypeScript, OpenAI, PHP)..." 
                       class="w-full pl-11 pr-4 py-3.5 rounded-2xl glass-card border border-slate-200 dark:border-slate-800 text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 shadow-sm transition">
            </div>

            <div class="flex flex-wrap items-center justify-center gap-2 text-xs font-medium">
                <button type="button" onclick="filterBlogCategory('all', this)" class="blog-cat-btn px-4 py-2 rounded-full border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold shadow-sm">All Articles</button>
                <button type="button" onclick="filterBlogCategory('climate', this)" class="blog-cat-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-emerald-500 transition">Climate MRV</button>
                <button type="button" onclick="filterBlogCategory('strapi', this)" class="blog-cat-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-indigo-500 transition">Strapi & Node.js</button>
                <button type="button" onclick="filterBlogCategory('database', this)" class="blog-cat-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-sky-500 transition">PostgreSQL & MySQL</button>
                <button type="button" onclick="filterBlogCategory('ai', this)" class="blog-cat-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-amber-500 transition">AI & LLMs</button>
            </div>
        </div>
    </div>
</section>

<!-- ================= FEATURED HERO ARTICLE ================= -->
<section class="pb-12 px-5 sm:px-8 lg:px-[8%]">
    <div class="max-w-6xl mx-auto">
        <div class="reveal glass-card rounded-3xl border border-emerald-500/30 overflow-hidden grid grid-cols-1 lg:grid-cols-12 glass-card-hover group">
            <div class="lg:col-span-5 relative bg-gradient-to-tr from-emerald-950 via-slate-900 to-indigo-950 p-8 flex flex-col justify-between min-h-[260px]">
                <div class="ambient-glow -bottom-10 -right-10 bg-emerald-500/30"></div>
                <div class="flex items-center justify-between relative z-10">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                        Featured Article
                    </span>
                    <span class="text-xs text-emerald-400 font-medium">8 min read</span>
                </div>
                <div class="relative z-10">
                    <i class="fa-solid fa-leaf text-4xl text-emerald-400/80 mb-2"></i>
                    <h4 class="text-lg font-bold text-white">Climate-Tech Backend Engineering</h4>
                </div>
            </div>

            <div class="lg:col-span-7 p-8 sm:p-10 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 text-xs text-slate-500 dark:text-slate-400 mb-3">
                        <span><i class="fa-regular fa-calendar text-emerald-500"></i> Feb 2026</span>
                        <span>•</span>
                        <span><i class="fa-solid fa-user text-purple-500"></i> Sudipan Mandal</span>
                        <span>•</span>
                        <span class="text-emerald-600 dark:text-emerald-400 font-medium">IMITERRA Series</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 dark:text-white tracking-tight mb-3">
                        Architecting IMITERRA: Building a Scalable MRV Platform for Carbon Removal with Node.js & Strapi
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-6">
                        An in-depth architectural breakdown of how we built the Measurement, Reporting, and Verification engine for Enhanced Rock Weathering, handling spatial soil data ingestion, PostgreSQL relational models, and audit-proof carbon calculations.
                    </p>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-800">
                    <div class="flex flex-wrap gap-1.5">
                        <span class="px-2 py-0.5 rounded text-[11px] bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">Strapi</span>
                        <span class="px-2 py-0.5 rounded text-[11px] bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">TypeScript</span>
                        <span class="px-2 py-0.5 rounded text-[11px] bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">PostgreSQL</span>
                    </div>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=architecting-imiterra-mrv-platform" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1.5">
                        <span>Read Article</span>
                        <i class="fa-solid fa-arrow-right text-[10px]"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= BLOG ARTICLES GRID ================= -->
<section class="py-12 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-6xl mx-auto">

        <div id="blogArticlesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Article 1: PostgreSQL Optimization -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="database"
                     data-keywords="postgresql spatial time series optimization indexes explain analyze b-tree gist query tuning">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-sky-50 dark:bg-sky-950/40 text-sky-700 dark:text-sky-300 font-semibold border border-sky-500/20">Database</span>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Mastering PostgreSQL for Spatial & Time-Series Carbon Metrics
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        Techniques for indexing geo-tagged agricultural plot boundaries and optimizing high-frequency soil sensor telemetry without sacrificing relational data integrity.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">PostgreSQL, SQL</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=mastering-postgresql-spatial-timeseries" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

            <!-- Article 2: TypeScript Backend -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="strapi"
                     data-keywords="typescript type safety backend nodejs strapi interfaces generics api contract">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 font-semibold border border-blue-500/20">TypeScript</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Type-Safe Backend Engineering: TypeScript Best Practices for Modern REST APIs
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        How strict TypeScript interfaces, generic response wrappers, and runtime schema validators prevent silent production bugs in critical API services.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">TypeScript, Node.js</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=typesafe-backend-engineering-typescript" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

            <!-- Article 3: OpenAI API Integrations -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="ai"
                     data-keywords="openai llm gpt-4 vision json schema mpdf document extraction php nodejs prompt engineering">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-amber-50 dark:bg-amber-950/40 text-amber-700 dark:text-amber-300 font-semibold border border-amber-500/20">AI & LLMs</span>
                        <span>7 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Integrating OpenAI LLMs with Enterprise Web Backends for Intelligent Document Parsing
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        Real-world strategies for prompting OpenAI GPT-4 Vision, extracting clean typed JSON, and generating dynamic PDF reports with mPDF in production.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">OpenAI, LLMs, mPDF</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=openai-llm-document-parsing" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

            <!-- Article 4: CodeIgniter 4 & MySQL MVC -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="database"
                     data-keywords="codeigniter 4 php 8 mysql query optimization mvc architecture indexing vxplore">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold border border-purple-500/20">PHP & MVC</span>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Optimizing MySQL Queries for High-Throughput Production Workloads
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        Practical tips on query profiling, eliminating full-table scans, compound composite indexes, and structuring CodeIgniter 4 models for minimal database load.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">PHP 8, MySQL, CI4</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=optimizing-mysql-queries-high-throughput" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

            <!-- Article 5: Strapi Content Modeling -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="strapi"
                     data-keywords="strapi headless cms content models rbac custom controllers lifecycle hooks nodejs">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-indigo-50 dark:bg-indigo-950/40 text-indigo-700 dark:text-indigo-300 font-semibold border border-indigo-500/20">Headless CMS</span>
                        <span>6 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Advanced Strapi: Custom Lifecycle Hooks, RBAC & Plugin Extensions
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        How to extend Strapi beyond a basic CMS into an enterprise data ingestion hub with asynchronous webhooks and custom permission middlewares.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">Strapi, Node.js</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=advanced-strapi-lifecycle-hooks-rbac" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

            <!-- Article 6: Enhanced Rock Weathering 101 -->
            <article class="blog-item-card reveal glass-card rounded-3xl border border-slate-200/80 dark:border-slate-800 overflow-hidden flex flex-col justify-between glass-card-hover group"
                     data-category="climate"
                     data-keywords="enhanced rock weathering erw carbon removal mrv climate tech eelab carbon basalt">
                <div class="p-6">
                    <div class="flex items-center justify-between text-xs text-slate-500 mb-3">
                        <span class="px-2.5 py-1 rounded-md bg-emerald-50 dark:bg-emerald-950/40 text-emerald-700 dark:text-emerald-300 font-semibold border border-emerald-500/20">Climate Science</span>
                        <span>4 min read</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition mb-2">
                        Understanding Enhanced Rock Weathering (ERW): The Software Engineer's Primer
                    </h3>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed mb-4">
                        A software engineer's overview of the geochemical mechanisms converting atmospheric CO₂ into stable bicarbonates through mineral soil applications.
                    </p>
                </div>
                <div class="px-6 pb-6 pt-3 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between">
                    <span class="text-xs text-slate-400">Climate-Tech, MRV</span>
                    <a href="<?= BASE_URL ?>pages/single-blog.php?slug=understanding-enhanced-rock-weathering-primer" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">Read <i class="fa-solid fa-arrow-right text-[10px]"></i></a>
                </div>
            </article>

        </div>

        <!-- No Results Fallback -->
        <div id="noBlogResults" class="hidden text-center py-16">
            <div class="w-16 h-16 rounded-2xl bg-slate-100 dark:bg-slate-800 text-slate-400 flex items-center justify-center text-2xl mx-auto mb-4">
                <i class="fa-solid fa-newspaper"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white">No matching articles found</h3>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Try adjusting your search terms or selecting a different category.</p>
        </div>

    </div>
</section>

<!-- ================= NEWSLETTER SUBSCRIPTION BOX ================= -->
<section class="py-16 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-4xl mx-auto glass-card p-8 sm:p-12 rounded-3xl border border-purple-500/30 text-center bg-gradient-to-r from-purple-950/20 via-slate-900/30 to-indigo-950/20">
        <span class="w-12 h-12 rounded-2xl bg-purple-100 dark:bg-purple-950/60 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl mx-auto mb-4">
            <i class="fa-solid fa-paper-plane"></i>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">
            Subscribe to Engineering Insights
        </h2>
        <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm mt-2 max-w-md mx-auto leading-relaxed">
            Get practical case studies on Climate-Tech architectures, Strapi & Node.js tips, and database optimization directly to your inbox.
        </p>

        <form id="newsletterForm" onsubmit="handleNewsletterSubmit(event)" class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
            <input type="email" 
                   id="newsletterEmail" 
                   name="email"
                   required 
                   placeholder="Enter your work email address..." 
                   class="w-full px-5 py-3.5 rounded-full glass-card border border-slate-200 dark:border-slate-700 text-xs sm:text-sm text-slate-800 dark:text-slate-200 placeholder-slate-400 outline-none focus:border-purple-500 shadow-inner">
            <button type="submit" 
                    id="newsletterBtn" 
                    class="w-full sm:w-auto btn-primary text-xs px-6 py-3.5 whitespace-nowrap shadow-lg shadow-purple-500/25">
                <span id="newsBtnText" class="flex items-center gap-1.5">
                    <span>Subscribe</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                </span>
                <span id="newsBtnSpinner" class="hidden flex items-center gap-1.5">
                    <i class="fa-solid fa-spinner animate-spin"></i>
                    <span>Subscribing...</span>
                </span>
            </button>
        </form>

        <!-- Dynamic Feedback Container -->
        <div id="newsletterStatus" class="hidden max-w-md mx-auto mt-4 p-3.5 rounded-2xl text-xs font-semibold"></div>
    </div>
</section>

<script>
let currentBlogCategory = 'all';

function filterBlogCategory(category, btn) {
    currentBlogCategory = category;
    document.querySelectorAll('.blog-cat-btn').forEach(b => {
        b.className = 'blog-cat-btn px-4 py-2 rounded-full border border-slate-200 dark:border-slate-800 glass-card text-slate-600 dark:text-slate-300 hover:border-purple-500 transition';
    });
    btn.className = 'blog-cat-btn px-4 py-2 rounded-full border border-purple-500 bg-purple-50 dark:bg-purple-950/40 text-purple-700 dark:text-purple-300 font-semibold shadow-sm';
    applyBlogFilters();
}

function filterBlogArticles() {
    applyBlogFilters();
}

function applyBlogFilters() {
    const query = (document.getElementById('blogSearchInput')?.value || '').toLowerCase().trim();
    const cards = document.querySelectorAll('.blog-item-card');
    let visibleCount = 0;

    cards.forEach(card => {
        const category = card.getAttribute('data-category') || '';
        const keywords = (card.getAttribute('data-keywords') || '').toLowerCase();
        const text = card.textContent.toLowerCase();

        const matchesCat = (currentBlogCategory === 'all' || category.includes(currentBlogCategory));
        const matchesQuery = (!query || keywords.includes(query) || text.includes(query));

        if (matchesCat && matchesQuery) {
            card.classList.remove('hidden');
            visibleCount++;
        } else {
            card.classList.add('hidden');
        }
    });

    const fallback = document.getElementById('noBlogResults');
    if (fallback) {
        if (visibleCount === 0) {
            fallback.classList.remove('hidden');
        } else {
            fallback.classList.add('hidden');
        }
    }
}

async function handleNewsletterSubmit(e) {
    e.preventDefault();
    const input = document.getElementById('newsletterEmail');
    const btn = document.getElementById('newsletterBtn');
    const text = document.getElementById('newsBtnText');
    const spinner = document.getElementById('newsBtnSpinner');
    const status = document.getElementById('newsletterStatus');

    if (!input || !input.value) return;

    btn.disabled = true;
    text.classList.add('hidden');
    spinner.classList.remove('hidden');
    status.className = 'hidden';

    const formData = new FormData();
    formData.append('email', input.value.trim());
    formData.append('source', 'Blog Hub Page');

    const endpoint = (typeof window !== 'undefined' && window.BASE_URL) ? `${window.BASE_URL}pages/subscribe_process.php` : "pages/subscribe_process.php";

    try {
        const response = await fetch(endpoint, {
            method: 'POST',
            body: formData
        });
        const result = await response.json();

        if (result.success) {
            status.className = 'max-w-md mx-auto mt-4 p-3.5 rounded-2xl text-xs font-semibold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30 flex items-center justify-center gap-2 block animate-fadeIn';
            status.innerHTML = `<i class="fa-solid fa-circle-check text-base text-emerald-500"></i> <span>${result.message}</span>`;
            input.value = '';
        } else {
            status.className = 'max-w-md mx-auto mt-4 p-3.5 rounded-2xl text-xs font-semibold bg-red-100 dark:bg-red-950/60 text-red-700 dark:text-red-300 border border-red-500/30 flex items-center justify-center gap-2 block';
            status.innerHTML = `<i class="fa-solid fa-circle-exclamation text-base text-red-500"></i> <span>${result.message || 'Subscription failed. Please check your email.'}</span>`;
        }
    } catch (err) {
        status.className = 'max-w-md mx-auto mt-4 p-3.5 rounded-2xl text-xs font-semibold bg-red-100 dark:bg-red-950/60 text-red-700 dark:text-red-300 border border-red-500/30 flex items-center justify-center gap-2 block';
        status.innerHTML = `<i class="fa-solid fa-triangle-exclamation text-base text-red-500"></i> <span>Network error. Please try again later.</span>`;
    } finally {
        btn.disabled = false;
        text.classList.remove('hidden');
        spinner.classList.add('hidden');
    }
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
