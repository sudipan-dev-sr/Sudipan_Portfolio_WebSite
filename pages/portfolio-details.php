<?php
$pageTitle = "Case Study: IMITERRA MRV Platform | Sudipan Mandal";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- ================= CASE STUDY HERO ================= -->
<section class="relative pt-32 pb-16 px-5 sm:px-8 lg:px-[8%] overflow-hidden">
    <!-- Ambient Background Glows -->
    <div class="ambient-glow -top-20 -left-20 bg-emerald-500/20"></div>
    <div class="ambient-glow top-40 -right-20 bg-indigo-500/15"></div>

    <div class="max-w-5xl mx-auto relative z-10">
        <!-- Breadcrumbs -->
        <nav class="reveal flex items-center gap-2 text-xs font-medium text-slate-500 dark:text-slate-400 mb-6">
            <a href="<?= BASE_URL ?>" class="hover:text-purple-600 dark:hover:text-purple-400 transition flex items-center gap-1">
                <i class="fa-solid fa-house text-[10px]"></i> Home
            </a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <a href="<?= BASE_URL ?>pages/portfolio.php" class="hover:text-purple-600 dark:hover:text-purple-400 transition">Portfolio</a>
            <i class="fa-solid fa-chevron-right text-[9px] text-slate-400"></i>
            <span class="text-emerald-600 dark:text-emerald-400">IMITERRA MRV Platform</span>
        </nav>

        <div class="flex flex-wrap items-center gap-3 mb-4">
            <span class="px-3.5 py-1 rounded-full text-xs font-bold bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30 flex items-center gap-1.5">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                Flagship Project • Production Active
            </span>
            <span class="px-3 py-1 rounded-full text-xs font-medium bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
                Climate-Tech & Nature-Based Carbon Removal
            </span>
        </div>

        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 dark:text-white tracking-tight leading-tight">
            IMITERRA <span class="gradient-text">MRV Platform</span>
        </h1>
        <p class="mt-4 text-slate-600 dark:text-slate-300 max-w-3xl text-sm sm:text-lg leading-relaxed">
            Measurement, Reporting, and Verification system engineering for Enhanced Rock Weathering (ERW) and soil carbon sequestration accounting.
        </p>

        <!-- Project Metadata Bar -->
        <div class="reveal mt-10 grid grid-cols-2 sm:grid-cols-4 gap-4 p-6 glass-card rounded-2xl border border-slate-200/80 dark:border-slate-800">
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Organization</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white mt-1">EELAB CARBON Pvt Ltd</h4>
                <p class="text-xs text-slate-500">BCC&I / WEBEL Incubated</p>
            </div>
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">My Role</span>
                <h4 class="text-sm font-bold text-slate-900 dark:text-white mt-1">Junior Engineer</h4>
                <p class="text-xs text-slate-500">Backend & MRV APIs</p>
            </div>
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Core Stack</span>
                <h4 class="text-sm font-bold text-emerald-600 dark:text-emerald-400 mt-1">Node.js + Strapi</h4>
                <p class="text-xs text-slate-500">TypeScript & PostgreSQL</p>
            </div>
            <div>
                <span class="text-[11px] font-bold uppercase tracking-wider text-slate-400">Live Website</span>
                <a href="https://eelabcarbon.com/" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1 mt-1">
                    <span>eelabcarbon.com</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
                </a>
                <p class="text-xs text-slate-500">Official Portal</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= CASE STUDY BODY ================= -->
<section class="py-12 px-5 sm:px-8 lg:px-[8%] relative">
    <div class="max-w-5xl mx-auto space-y-16">

        <!-- Visual Architecture Overview Banner -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800 bg-gradient-to-tr from-emerald-950/20 via-slate-900/30 to-indigo-950/20">
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
                <i class="fa-solid fa-layer-group text-emerald-500"></i>
                System Architecture Overview
            </h2>
            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed mb-8">
                The IMITERRA platform collects, validates, and processes multi-source field data—including soil sampling chemistry, GPS polygon boundaries, and geochemical weathering models—into verified carbon credits.
            </p>

            <!-- 4 Architecture Blocks -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="p-5 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800">
                    <span class="w-8 h-8 rounded-lg bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-sm font-bold mb-3">01</span>
                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Field Data Ingestion</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Mobile field logs, GPS plot tagging, baseline soil pH and cation exchange capacity.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800">
                    <span class="w-8 h-8 rounded-lg bg-indigo-100 dark:bg-indigo-950/80 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-sm font-bold mb-3">02</span>
                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Strapi CMS & Node.js</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Decoupled headless API services, TypeScript validation layer, and RBAC control.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800">
                    <span class="w-8 h-8 rounded-lg bg-sky-100 dark:bg-sky-950/80 text-sky-600 dark:text-sky-400 flex items-center justify-center text-sm font-bold mb-3">03</span>
                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">PostgreSQL Spatial DB</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Relational data models, geospatial plot coordinates, and weathering time-series.</p>
                </div>
                <div class="p-5 rounded-2xl bg-white/60 dark:bg-slate-900/60 border border-slate-200 dark:border-slate-800">
                    <span class="w-8 h-8 rounded-lg bg-purple-100 dark:bg-purple-950/80 text-purple-600 dark:text-purple-400 flex items-center justify-center text-sm font-bold mb-3">04</span>
                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Audit & Certification</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Exportable audit trails for carbon standards registry, real-time analytics.</p>
                </div>
            </div>
        </div>

        <!-- Problem vs Solution Breakdown -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- The Problem -->
            <div class="reveal glass-card p-8 rounded-3xl border border-red-500/20 bg-red-950/5">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-950/60 text-red-600 dark:text-red-400 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">The Engineering Challenge</h3>
                </div>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-xmark text-red-500 mt-1 flex-shrink-0"></i>
                        <span>Manual field soil sampling suffered from paper logs, disconnected GPS coordinates, and lack of digital traceability.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-xmark text-red-500 mt-1 flex-shrink-0"></i>
                        <span>High data volume of geological minerals and multi-season weathering measurements needed strict relational schema integrity.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-xmark text-red-500 mt-1 flex-shrink-0"></i>
                        <span>Carbon credit auditing required tamper-proof, transparent data pipelines from sampling to quantification.</span>
                    </li>
                </ul>
            </div>

            <!-- The Solution -->
            <div class="reveal glass-card p-8 rounded-3xl border border-emerald-500/20 bg-emerald-950/5">
                <div class="flex items-center gap-3 mb-4">
                    <span class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-circle-check"></i>
                    </span>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">The Technical Solution</h3>
                </div>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0"></i>
                        <span>Engineered a decoupled backend using <strong>Strapi Headless CMS</strong> on <strong>Node.js</strong> with custom <strong>TypeScript</strong> controllers.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0"></i>
                        <span>Designed and optimized a <strong>PostgreSQL</strong> relational database storing geo-tagged farm plots, basalt rock applications, and chemical metrics.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-check text-emerald-500 mt-1 flex-shrink-0"></i>
                        <span>Built high-throughput RESTful API endpoints for instant mobile field sync, real-time analytics, and verification registry exports.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Interactive Architecture Deep Dive Tabs -->
        <div class="reveal glass-card p-8 sm:p-10 rounded-3xl border border-slate-200 dark:border-slate-800">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">
                Technical Implementation Details
            </h3>

            <!-- Tabs Nav -->
            <div class="flex flex-wrap gap-2 border-b border-slate-200 dark:border-slate-800 pb-4 mb-6">
                <button type="button" onclick="switchTechTab('strapi', this)" class="tech-tab-btn px-4 py-2 rounded-xl text-xs font-bold bg-purple-100 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-500/30">Strapi & Node.js Engine</button>
                <button type="button" onclick="switchTechTab('postgres', this)" class="tech-tab-btn px-4 py-2 rounded-xl text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition">PostgreSQL Schema</button>
                <button type="button" onclick="switchTechTab('typescript', this)" class="tech-tab-btn px-4 py-2 rounded-xl text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition">TypeScript Services</button>
                <button type="button" onclick="switchTechTab('erw', this)" class="tech-tab-btn px-4 py-2 rounded-xl text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition">ERW Calculations</button>
            </div>

            <!-- Tab 1: Strapi & Node.js -->
            <div id="tab-strapi" class="tech-tab-pane space-y-4 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                <p>
                    Leveraged <strong>Strapi v4 / v5 Headless CMS</strong> running on Node.js to manage dynamic content models for agricultural plots, soil chemical samples, and weathering sensor readings. 
                </p>
                <div class="p-4 rounded-xl bg-slate-950 text-slate-200 font-mono text-xs overflow-x-auto border border-slate-800">
                    <span class="text-slate-500">// Custom Strapi Controller for Field Ingestion</span><br>
                    <span class="text-purple-400">export default</span> fact.createCoreController(<span class="text-emerald-300">'api::sample-plot.sample-plot'</span>, ({ strapi }) => ({<br>
                    &nbsp;&nbsp;<span class="text-blue-400">async</span> ingestPlotData(ctx) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-indigo-400">const</span> { plotId, coordinates, soilPh, basaltTonnage } = ctx.request.body;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-slate-500">// Validate payload against TypeScript schema & persist in PostgreSQL</span><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-400">return</span> <span class="text-purple-400">await</span> strapi.service(<span class="text-emerald-300">'api::mrv.carbon-calculator'</span>).computeSequestration(ctx.request.body);<br>
                    &nbsp;&nbsp;}<br>
                    }));
                </div>
            </div>

            <!-- Tab 2: PostgreSQL Schema -->
            <div id="tab-postgres" class="tech-tab-pane hidden space-y-4 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                <p>
                    Structured relational tables in <strong>PostgreSQL</strong> connecting test plots, rock deployment batches, multi-layer soil depth analyses, and external weather station feeds with foreign key integrity and spatial coordinates indexing.
                </p>
                <div class="p-4 rounded-xl bg-slate-950 text-slate-200 font-mono text-xs overflow-x-auto border border-slate-800">
                    <span class="text-purple-400">CREATE TABLE</span> mrv_test_plots (<br>
                    &nbsp;&nbsp;id <span class="text-sky-400">SERIAL PRIMARY KEY</span>,<br>
                    &nbsp;&nbsp;plot_uid <span class="text-sky-400">VARCHAR(64) UNIQUE NOT NULL</span>,<br>
                    &nbsp;&nbsp;latitude <span class="text-sky-400">NUMERIC(10, 8) NOT NULL</span>,<br>
                    &nbsp;&nbsp;longitude <span class="text-sky-400">NUMERIC(11, 8) NOT NULL</span>,<br>
                    &nbsp;&nbsp;basalt_applied_tonnes <span class="text-sky-400">NUMERIC(12, 4)</span>,<br>
                    &nbsp;&nbsp;baseline_ph <span class="text-sky-400">NUMERIC(4, 2)</span>,<br>
                    &nbsp;&nbsp;created_at <span class="text-sky-400">TIMESTAMP DEFAULT CURRENT_TIMESTAMP</span><br>
                    );
                </div>
            </div>

            <!-- Tab 3: TypeScript Services -->
            <div id="tab-typescript" class="tech-tab-pane hidden space-y-4 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                <p>
                    Utilized <strong>TypeScript</strong> to provide strict compile-time type safety across all REST API controllers, data transformers, and carbon accounting business logic, reducing runtime exceptions to near zero.
                </p>
                <div class="p-4 rounded-xl bg-slate-950 text-slate-200 font-mono text-xs overflow-x-auto border border-slate-800">
                    <span class="text-indigo-400">interface</span> <span class="text-yellow-300">SoilSampleMetrics</span> {<br>
                    &nbsp;&nbsp;plotId: <span class="text-sky-400">string</span>;<br>
                    &nbsp;&nbsp;sampleTimestamp: <span class="text-sky-400">Date</span>;<br>
                    &nbsp;&nbsp;calciumMagnesiumRatio: <span class="text-sky-400">number</span>;<br>
                    &nbsp;&nbsp;weatheringRateEstimate: <span class="text-sky-400">number</span>;<br>
                    &nbsp;&nbsp;isVerified: <span class="text-sky-400">boolean</span>;<br>
                    }
                </div>
            </div>

            <!-- Tab 4: ERW Calculations -->
            <div id="tab-erw" class="tech-tab-pane hidden space-y-4 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                <p>
                    Enhanced Rock Weathering (ERW) accelerates natural silicate weathering by spreading finely crushed basalt over croplands. The IMITERRA MRV platform quantifies atmospheric CO₂ captured as dissolved inorganic carbon (bicarbonates) based on geochemical parameters.
                </p>
            </div>
        </div>

        <!-- Key Outcomes & Impact -->
        <div class="reveal">
            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-white mb-6 text-center">
                Key Deliverables & Architectural Impact
            </h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center">
                    <span class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400">100%</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">Digital Traceability</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Replaced disconnected paper records with real-time API sync.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center">
                    <span class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">&lt;120ms</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">API Response Latency</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Optimized PostgreSQL query indices and caching layers.</p>
                </div>
                <div class="glass-card p-6 rounded-2xl border border-slate-200 dark:border-slate-800 text-center">
                    <span class="text-3xl font-extrabold text-purple-600 dark:text-purple-400">Audit-Ready</span>
                    <h4 class="font-bold text-slate-900 dark:text-white text-sm mt-1">Registry Standard</h4>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Standardized JSON reporting format for carbon certification audits.</p>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex flex-wrap items-center justify-between gap-4 pt-8 border-t border-slate-200 dark:border-slate-800">
            <a href="<?= BASE_URL ?>pages/portfolio.php" class="btn-outline text-xs">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                <span>Back to Portfolio</span>
            </a>
            <a href="<?= BASE_URL ?>pages/contact.php" class="btn-primary text-xs">
                <span>Discuss a Similar Project</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </a>
        </div>

    </div>
</section>

<script>
function switchTechTab(tabId, btn) {
    document.querySelectorAll('.tech-tab-btn').forEach(b => {
        b.className = 'tech-tab-btn px-4 py-2 rounded-xl text-xs font-medium text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition';
    });
    btn.className = 'tech-tab-btn px-4 py-2 rounded-xl text-xs font-bold bg-purple-100 dark:bg-purple-950/60 text-purple-700 dark:text-purple-300 border border-purple-500/30';

    document.querySelectorAll('.tech-tab-pane').forEach(p => p.classList.add('hidden'));
    const activePane = document.getElementById('tab-' + tabId);
    if (activePane) activePane.classList.remove('hidden');
}
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
