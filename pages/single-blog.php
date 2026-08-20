<?php
$slug = isset($_GET['slug']) ? htmlspecialchars($_GET['slug']) : 'architecting-imiterra-mrv-platform';
$pageTitle = "Architecting IMITERRA: Scalable MRV Platform | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= ARTICLE HEADER ================= -->
<article class="relative pt-32 pb-20 px-5 sm:px-8 lg:px-[8%] overflow-hidden">
    <!-- Ambient Background Glows -->
    <div class="ambient-glow -top-20 -left-20 bg-emerald-500/15"></div>
    <div class="ambient-glow top-60 -right-20 bg-purple-500/15"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <!-- Breadcrumb -->
        <nav class="reveal flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400 mb-6">
            <a href="<?= BASE_URL ?>" class="hover:text-purple-600 dark:hover:text-purple-400 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <a href="<?= BASE_URL ?>pages/blog.php" class="hover:text-purple-600 dark:hover:text-purple-400 transition">Blog</a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <span class="text-emerald-600 dark:text-emerald-400 truncate max-w-[200px] sm:max-w-none">Article</span>
        </nav>

        <div class="flex flex-wrap items-center gap-2.5 mb-4">
            <span class="px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30">
                Climate-Tech & Backend Architecture
            </span>
            <span class="text-xs text-slate-500">• 8 min read • Feb 2026</span>
        </div>

        <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight mb-6">
            Architecting IMITERRA: Building a Scalable MRV Platform for Carbon Removal with Node.js & Strapi
        </h1>

        <!-- Author Banner -->
        <div class="flex items-center justify-between p-4 glass-card rounded-2xl border border-slate-200 dark:border-slate-800 mb-10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-emerald-500 text-white flex items-center justify-center font-bold text-sm">
                    SM
                </div>
                <div>
                    <h4 class="text-xs font-bold text-slate-900 dark:text-white">Sudipan Mandal</h4>
                    <p class="text-[11px] text-slate-500 dark:text-slate-400">Junior Engineer @ EELAB CARBON Pvt Ltd</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="copyArticleUrl()" class="px-3 py-1.5 rounded-xl border border-slate-200 dark:border-slate-700 glass-card text-xs font-medium text-slate-700 dark:text-slate-200 hover:text-purple-600 flex items-center gap-1.5">
                    <i class="fa-solid fa-link text-xs"></i>
                    <span id="copyUrlText">Share</span>
                </button>
            </div>
        </div>

        <!-- Main Article Content Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Article Body (8 cols) -->
            <div class="lg:col-span-8 space-y-8 text-slate-700 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                
                <div>
                    <h2 id="intro" class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Introduction: The Carbon Removal Verification Challenge
                    </h2>
                    <p>
                        Nature-based carbon removal via <strong>Enhanced Rock Weathering (ERW)</strong> represents one of the most promising climate technologies. By spreading crushed silicate rocks (such as basalt) over agricultural croplands, the natural chemical weathering process captures atmospheric carbon dioxide (\(\text{CO}_2\)) and permanently locks it into stable dissolved bicarbonate ions in groundwater.
                    </p>
                    <p class="mt-3">
                        However, the fundamental barrier to scaling nature-based carbon markets is <strong>verifiability</strong>. Carbon credit buyers and standards registries require indisputable, audit-ready data tracking every gram of rock deployed, every soil sample analyzed, and every geo-polygon monitored. This is where the <strong>IMITERRA MRV Platform</strong> comes in.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-emerald-950/20 border border-emerald-500/30">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-emerald-400 mb-1 flex items-center gap-1.5">
                        <i class="fa-solid fa-lightbulb"></i> Core Principle
                    </h4>
                    <p class="text-xs text-slate-300">
                        "If it cannot be measured, geolocated, and independently audited via tamper-proof data pipelines, it cannot be certified as a high-integrity carbon credit."
                    </p>
                </div>

                <div>
                    <h2 id="stack" class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Technology Stack Selection & Rationale
                    </h2>
                    <p>
                        When architecting the IMITERRA backend at EELAB CARBON, we selected a modern decoupled stack designed for rapid schema evolution, high query performance, and rock-solid type safety:
                    </p>
                    <ul class="list-disc pl-5 mt-3 space-y-2 text-xs sm:text-sm">
                        <li><strong>Strapi Headless CMS (Node.js):</strong> Provides rapid content modeling, role-based permission tiers (administrators, field agronomists, scientific auditors), and extensible RESTful controllers.</li>
                        <li><strong>TypeScript:</strong> Enforces strict compile-time contracts across all API request handlers, calculation models, and external webhook integrations.</li>
                        <li><strong>PostgreSQL Database:</strong> Stores relational plot records, baseline chemistry data, and spatial coordinate boundaries with transactional integrity.</li>
                        <li><strong>RESTful API Pipeline:</strong> Stateless JSON endpoints connecting field mobile logging tools with the central analytical dashboard.</li>
                    </ul>
                </div>

                <div>
                    <h2 id="strapi-controllers" class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Custom Strapi Controllers with TypeScript
                    </h2>
                    <p>
                        Rather than using purely generated CRUD endpoints, we built custom service controllers that perform real-time validation and trigger mathematical weathering estimation algorithms upon ingestion:
                    </p>
                    
                    <div class="relative my-4 rounded-2xl bg-slate-950 text-slate-200 p-5 font-mono text-xs overflow-x-auto border border-slate-800">
                        <div class="flex items-center justify-between text-slate-400 pb-2 mb-2 border-b border-slate-800">
                            <span>src/api/mrv/controllers/mrv-ingest.ts</span>
                            <button onclick="copyCodeSnippet(this)" class="hover:text-white flex items-center gap-1 text-[11px]"><i class="fa-regular fa-copy"></i> Copy</button>
                        </div>
                        <pre><code><span class="text-purple-400">import</span> { factories } <span class="text-purple-400">from</span> <span class="text-emerald-300">'@strapi/strapi'</span>;

<span class="text-purple-400">export default</span> factories.createCoreController(<span class="text-emerald-300">'api::mrv.mrv'</span>, ({ strapi }) => ({
  <span class="text-blue-400">async</span> ingestSoilPlot(ctx) {
    <span class="text-indigo-400">const</span> { plotId, coordinates, cationExchangeCapacity, basaltTonnage } = ctx.request.body;

    <span class="text-slate-500">// Verify plot authorization</span>
    <span class="text-indigo-400">const</span> verifiedPlot = <span class="text-purple-400">await</span> strapi.entityService.findMany(<span class="text-emerald-300">'api::plot.plot'</span>, {
      filters: { plotUid: plotId }
    });

    <span class="text-purple-400">if</span> (!verifiedPlot.length) {
      <span class="text-purple-400">return</span> ctx.badRequest(<span class="text-emerald-300">'Invalid or unverified agricultural plot.'</span>);
    }

    <span class="text-slate-500">// Execute sequestration quantification service</span>
    <span class="text-indigo-400">const</span> results = <span class="text-purple-400">await</span> strapi.service(<span class="text-emerald-300">'api::mrv.calculator'</span>).calculateNetCO2(ctx.request.body);
    <span class="text-purple-400">return</span> ctx.send({ status: <span class="text-emerald-300">'success'</span>, data: results });
  }
}));</code></pre>
                    </div>
                </div>

                <div>
                    <h2 id="postgres-schema" class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        PostgreSQL Schema Architecture & Performance
                    </h2>
                    <p>
                        High-frequency soil sampling generates extensive time-series records. By designing normalized PostgreSQL schemas with composite indexes on `(plot_id, sample_timestamp)`, query execution times for timeline generation were reduced to under <strong>45 milliseconds</strong>.
                    </p>
                </div>

                <div>
                    <h2 id="conclusion" class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-3">
                        Conclusion: The Future of Software in Climate Action
                    </h2>
                    <p>
                        Building the backend for IMITERRA at EELAB CARBON demonstrates how modern software engineering disciplines—robust APIs, strict typing, and high-performance databases—directly empower real-world climate science and scalable carbon removal.
                    </p>
                </div>

            </div>

            <!-- Sticky Sidebar (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Table of Contents -->
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 sticky top-28">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900 dark:text-white mb-4">
                        Table of Contents
                    </h4>
                    <ul class="space-y-2 text-xs font-medium text-slate-500 dark:text-slate-400">
                        <li><a href="#intro" class="hover:text-purple-600 dark:hover:text-purple-400 transition block">1. The Verification Challenge</a></li>
                        <li><a href="#stack" class="hover:text-purple-600 dark:hover:text-purple-400 transition block">2. Tech Stack Rationale</a></li>
                        <li><a href="#strapi-controllers" class="hover:text-purple-600 dark:hover:text-purple-400 transition block">3. Custom Strapi Controllers</a></li>
                        <li><a href="#postgres-schema" class="hover:text-purple-600 dark:hover:text-purple-400 transition block">4. PostgreSQL Schema</a></li>
                        <li><a href="#conclusion" class="hover:text-purple-600 dark:hover:text-purple-400 transition block">5. Conclusion</a></li>
                    </ul>

                    <div class="mt-6 pt-6 border-t border-slate-200 dark:border-slate-800">
                        <a href="<?= BASE_URL ?>pages/portfolio-details.php" class="w-full btn-primary text-xs py-2.5 flex items-center justify-center gap-2">
                            <span>View Full Case Study</span>
                            <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</article>

<script>
function copyArticleUrl() {
    navigator.clipboard.writeText(window.location.href);
    const txt = document.getElementById('copyUrlText');
    if (txt) {
        txt.textContent = 'Copied!';
        setTimeout(() => txt.textContent = 'Share', 2000);
    }
}

function copyCodeSnippet(btn) {
    const code = btn.closest('.relative').querySelector('code').innerText;
    navigator.clipboard.writeText(code);
    btn.innerHTML = '<i class="fa-solid fa-check text-emerald-400"></i> Copied';
    setTimeout(() => btn.innerHTML = '<i class="fa-regular fa-copy"></i> Copy', 2000);
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
