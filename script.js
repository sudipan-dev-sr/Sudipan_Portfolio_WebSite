/**
 * Sudipan Mandal Portfolio - Interactive Engine
 * Handles Typewriter, Project Filtering, Case Study Modals, ScrollSpy, Theme Switcher, and Dynamic AJAX Form
 */

// ================= THEME CONTROLLER =================
function initTheme() {
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark');
    }
}

function toggleTheme() {
    document.documentElement.classList.toggle('dark');
    if (document.documentElement.classList.contains('dark')) {
        localStorage.theme = 'dark';
    } else {
        localStorage.theme = 'light';
    }
}

// ================= MOBILE NAVIGATION =================
const mobileMenu = document.getElementById("mobileMenu");
const mobileMenuBackdrop = document.getElementById("mobileMenuBackdrop");

function openMenu() {
    if (mobileMenu && mobileMenuBackdrop) {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenuBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        mobileMenuBackdrop.classList.add('opacity-100');
        document.body.style.overflow = 'hidden';
    }
}

function closeMenu() {
    if (mobileMenu && mobileMenuBackdrop) {
        mobileMenu.classList.add('translate-x-full');
        mobileMenuBackdrop.classList.remove('opacity-100');
        mobileMenuBackdrop.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
    }
}

// ================= SCROLLSPY & NAVBAR EFFECTS =================
const headerNav = document.getElementById("headerNav");
const navbar = document.getElementById("navbar");
const navItems = document.querySelectorAll(".nav-item");
const sections = document.querySelectorAll("section[id]");

function handleScroll() {
    const scrollPos = window.scrollY;

    // Glass navbar style on scroll
    if (headerNav) {
        if (scrollPos > 40) {
            headerNav.classList.add("glass-nav", "shadow-sm");
        } else {
            headerNav.classList.remove("glass-nav", "shadow-sm");
        }
    }

    // ScrollSpy active link detection
    let currentSectionId = "";
    sections.forEach(section => {
        const sectionTop = section.offsetTop - 120;
        const sectionHeight = section.offsetHeight;
        if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
            currentSectionId = section.getAttribute("id");
        }
    });

    navItems.forEach(item => {
        item.classList.remove("text-purple-600", "dark:text-purple-400", "font-bold", "bg-purple-50/80", "dark:bg-slate-800");
        const href = item.getAttribute("href");
        if (href === `#${currentSectionId}` || (currentSectionId === "" && href === "#top")) {
            item.classList.add("text-purple-600", "dark:text-purple-400", "font-bold", "bg-purple-50/80", "dark:bg-slate-800");
        }
    });
}

window.addEventListener("scroll", handleScroll);

// ================= TYPEWRITER ANIMATION =================
const typewriterPhrases = [
    "Full Stack PHP Developer",
    "CodeIgniter 4 & Laravel Specialist",
    "AI & OpenAI Integration Engineer",
    "Scalable Backend Architect",
    "MySQL & Database Optimizer"
];

let phraseIndex = 0;
let charIndex = 0;
let isDeleting = false;
const typingDelay = 90;
const erasingDelay = 40;
const newPhraseDelay = 1600;

function runTypewriter() {
    const typewriterElement = document.getElementById("typewriterText");
    if (!typewriterElement) return;

    const currentPhrase = typewriterPhrases[phraseIndex];

    if (isDeleting) {
        typewriterElement.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typewriterElement.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
    }

    let delay = isDeleting ? erasingDelay : typingDelay;

    if (!isDeleting && charIndex === currentPhrase.length) {
        delay = newPhraseDelay;
        isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % typewriterPhrases.length;
        delay = 400;
    }

    setTimeout(runTypewriter, delay);
}

// ================= PROJECT FILTERING =================
function filterProjects(category) {
    const filterButtons = document.querySelectorAll(".proj-filter-btn");
    const projectCards = document.querySelectorAll(".project-card");

    filterButtons.forEach(btn => {
        if (btn.getAttribute("data-category") === category) {
            btn.classList.add("active", "border-purple-500", "text-purple-600", "dark:text-purple-400");
            btn.classList.remove("border-slate-200", "dark:border-slate-800", "text-slate-600", "dark:text-slate-300");
        } else {
            btn.classList.remove("active", "border-purple-500", "text-purple-600", "dark:text-purple-400");
            btn.classList.add("border-slate-200", "dark:border-slate-800", "text-slate-600", "dark:text-slate-300");
        }
    });

    projectCards.forEach(card => {
        const cardCategory = card.getAttribute("data-category");
        if (category === "all" || cardCategory === category) {
            card.style.display = "flex";
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "scale(1)";
            }, 50);
        } else {
            card.style.opacity = "0";
            card.style.transform = "scale(0.95)";
            setTimeout(() => {
                card.style.display = "none";
            }, 250);
        }
    });
}

// ================= SKILLS FILTERING =================
function filterSkills(category) {
    const filterButtons = document.querySelectorAll(".skill-tab-btn");
    const skillCards = document.querySelectorAll(".skill-card");

    filterButtons.forEach(btn => {
        if (btn.getAttribute("data-category") === category) {
            btn.classList.add("active", "border-purple-500", "text-purple-600", "dark:text-purple-400");
            btn.classList.remove("border-slate-200", "dark:border-slate-800", "text-slate-600", "dark:text-slate-300");
        } else {
            btn.classList.remove("active", "border-purple-500", "text-purple-600", "dark:text-purple-400");
            btn.classList.add("border-slate-200", "dark:border-slate-800", "text-slate-600", "dark:text-slate-300");
        }
    });

    skillCards.forEach(card => {
        const cardCategory = card.getAttribute("data-category");
        if (category === "all" || cardCategory === category) {
            card.style.display = "block";
            setTimeout(() => {
                card.style.opacity = "1";
                card.style.transform = "translateY(0)";
            }, 50);
        } else {
            card.style.opacity = "0";
            card.style.transform = "translateY(10px)";
            setTimeout(() => {
                card.style.display = "none";
            }, 200);
        }
    });
}

// ================= PROJECT CASE STUDY MODALS =================
const projectCaseStudies = {
    cv_analyzer: {
        title: "AI-Powered CV Analyzer & Resume Scorer",
        category: "AI & Innovation • PHP • OpenAI • mPDF",
        image: "assets/work-1.png",
        overview: "An enterprise web solution built to automate and enhance candidate resume evaluations. The application allows users to upload CV documents (DOCX/PDF), extracts content, summarizes key professional experience, and evaluates candidate match for top MNC roles.",
        problem: "Traditional resume reviews are slow and subjective. Candidates often fail to optimize their resumes with essential industry keywords and skills demanded by multinational tech corporations.",
        solution: "Engineered an automated parsing engine using PHP, integrated OpenAI API prompt workflows for semantic analysis and gap detection, and implemented mPDF to generate downloadable, executive-ready PDF audit reports.",
        features: [
            "Support for DOCX and PDF resume uploads",
            "Automatic text extraction and entity normalization",
            "OpenAI LLM prompt pipeline for skill-gap & keyword detection",
            "MNC role alignment score and personalized career recommendations",
            "Automated high-resolution PDF report generation via mPDF",
            "Asynchronous AJAX upload and parsing without page refresh"
        ],
        techStack: ["PHP 8", "OpenAI API", "mPDF", "MySQL", "Bootstrap 5", "AJAX", "JavaScript"],
        github: "https://github.com/sudipan-dev-sr"
    },
    smart_rx: {
        title: "SmartRx – AI-Powered Prescription Analyzer",
        category: "Healthcare AI • PHP • OpenAI • JSON Engine",
        image: "assets/work-2.png",
        overview: "An intelligent healthcare web application designed to parse medical prescriptions, identify medications and dosages, provide structured treatment advisory notes, and persist patient consultation records securely.",
        problem: "Handwritten or complex prescriptions often confuse patients regarding dosage schedules, potential side effects, and medicine interactions.",
        solution: "Built a secure PHP and MySQL application utilizing OpenAI API to convert prescription data into structured JSON models, providing patients with clear, categorized medication schedules and dosage precautions.",
        features: [
            "Medical prescription data extraction and parsing",
            "Structured dosage schedules (morning, noon, night)",
            "Cautionary advisories on drug interactions and dietary guidelines",
            "Secure relational database storage with MySQL",
            "Full CRUD operations for patient records and history",
            "Intuitive, clean healthcare user interface"
        ],
        techStack: ["PHP 8", "MySQL", "OpenAI API", "JSON Parsing", "JavaScript", "HTML5/CSS3"],
        github: "https://github.com/sudipan-dev-sr"
    },
    student_system: {
        title: "Student Management System (Laravel MVC)",
        category: "Enterprise System • Laravel • Eloquent ORM",
        image: "assets/work-3.png",
        overview: "A comprehensive academic management system developed with Laravel framework to manage high-volume student records, enrollments, course tracking, and administrative workflows.",
        problem: "Institutions require dependable, structured databases with fast retrieval, paginated browsing, and secure role-based data validation.",
        solution: "Applied clean Laravel MVC architecture, Eloquent ORM relationships, RESTful routing, and database migrations with responsive Blade templates.",
        features: [
            "Complete CRUD operations (Create, Read, Update, Delete) for student profiles",
            "Instant live search, filtering, and paginated data tables",
            "Robust server-side request validation and CSRF protection",
            "Eloquent ORM data queries with optimized execution",
            "Clean and responsive Bootstrap 5 administration interface"
        ],
        techStack: ["Laravel", "PHP 8", "MySQL", "Blade Engine", "Bootstrap 5", "Eloquent ORM"],
        github: "https://github.com/sudipan-dev-sr"
    },
    ecommerce: {
        title: "Dynamic Full-Stack E-Commerce Platform",
        category: "Full-Stack • PHP & MySQL • AJAX",
        image: "assets/work-4.png",
        overview: "A full-featured e-commerce web platform engineered with PHP, MySQL, and dynamic AJAX front-end interactions for a seamless shopping experience.",
        problem: "E-commerce stores need fast load times, persistent carts across sessions, reliable checkout flows, and dynamic inventory updates without disrupting the user journey.",
        solution: "Implemented modular PHP MVC backend controllers, relational product catalog schemas in MySQL, and asynchronous AJAX cart operations.",
        features: [
            "Dynamic product catalog with category and price filtering",
            "User registration, login, and secure session management",
            "Asynchronous AJAX shopping cart (Add, Update, Remove)",
            "Checkout pipeline and order management backend",
            "Responsive product grids with image previews"
        ],
        techStack: ["PHP 8", "MySQL", "JavaScript (ES6+)", "AJAX", "CSS3", "HTML5"],
        github: "https://github.com/sudipan-dev-sr"
    },
    expense_tracker: {
        title: "Daily Expense Tracker & Budget Analytics",
        category: "FinTech • PHP & MySQL • AJAX",
        image: "assets/work-1.png",
        overview: "A practical financial web application allowing users to log daily expenses, categorize transactions, set budget alerts, and view total expense analytics in real time.",
        problem: "Users require a straightforward, low-friction tool to track daily cash outflows without cumbersome spreadsheets.",
        solution: "Created an intuitive dashboard powered by PHP and MySQL with AJAX interactions for instant calculation of spending summaries and category percentages.",
        features: [
            "User authentication and encrypted credential storage",
            "Categorized expense entries (Food, Travel, Bills, Entertainment)",
            "Dynamic calculation of daily, weekly, and monthly totals",
            "Real-time expense table updates via AJAX without page reloads",
            "Responsive mobile-friendly dashboard"
        ],
        techStack: ["PHP 8", "MySQL", "Bootstrap 5", "AJAX", "JavaScript"],
        github: "https://github.com/sudipan-dev-sr"
    }
};

const projectModal = document.getElementById("projectModal");
const projectModalContent = document.getElementById("projectModalContent");
const modalBody = document.getElementById("modalBody");

function openProjectModal(projectId) {
    const project = projectCaseStudies[projectId];
    if (!project || !modalBody || !projectModal) return;

    modalBody.innerHTML = `
        <div class="space-y-6">
            <div>
                <span class="inline-block px-3 py-1 rounded-full text-xs font-semibold bg-purple-100 dark:bg-purple-900/40 text-purple-700 dark:text-purple-300 mb-2">
                    ${project.category}
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white tracking-tight">
                    ${project.title}
                </h2>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2">Overview</h4>
                <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">${project.overview}</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                    <h5 class="text-xs font-bold text-red-600 dark:text-red-400 mb-1 flex items-center gap-1.5">
                        <i class="fa-solid fa-triangle-exclamation"></i> Problem Statement
                    </h5>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">${project.problem}</p>
                </div>
                <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                    <h5 class="text-xs font-bold text-emerald-600 dark:text-emerald-400 mb-1 flex items-center gap-1.5">
                        <i class="fa-solid fa-circle-check"></i> Technical Solution
                    </h5>
                    <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">${project.solution}</p>
                </div>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-3">Key Technical Highlights</h4>
                <ul class="space-y-2 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                    ${project.features.map(f => `
                        <li class="flex items-start gap-2">
                            <i class="fa-solid fa-check text-purple-600 dark:text-purple-400 mt-1 text-xs"></i>
                            <span>${f}</span>
                        </li>
                    `).join('')}
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2">Technologies Used</h4>
                <div class="flex flex-wrap gap-2">
                    ${project.techStack.map(t => `
                        <span class="px-2.5 py-1 rounded-md text-xs font-medium bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-800/50">
                            ${t}
                        </span>
                    `).join('')}
                </div>
            </div>

            <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                <a href="${project.github}" target="_blank" class="btn-primary text-xs py-2.5 px-6">
                    <i class="fa-brands fa-github text-sm"></i>
                    <span>View on GitHub</span>
                </a>
                <button onclick="closeProjectModal()" class="text-xs font-semibold text-slate-500 hover:text-slate-800 dark:hover:text-white">
                    Close Case Study
                </button>
            </div>
        </div>
    `;

    projectModal.classList.remove('opacity-0', 'pointer-events-none');
    projectModal.classList.add('opacity-100');
    projectModalContent.classList.remove('scale-95');
    projectModalContent.classList.add('scale-100');
    document.body.style.overflow = 'hidden';
}

function closeProjectModal() {
    if (!projectModal || !projectModalContent) return;
    projectModal.classList.remove('opacity-100');
    projectModal.classList.add('opacity-0', 'pointer-events-none');
    projectModalContent.classList.remove('scale-100');
    projectModalContent.classList.add('scale-95');
    document.body.style.overflow = '';
}

function handleModalBackdrop(event) {
    if (event.target === projectModal) {
        closeProjectModal();
    }
}

// Close on Escape key
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        closeProjectModal();
        closeMenu();
    }
});

// ================= STATS COUNTER ANIMATION =================
function initCounters() {
    const counters = document.querySelectorAll(".counter");
    if (counters.length === 0) return;

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseFloat(entry.target.getAttribute("data-target"));
                const isDecimal = target % 1 !== 0;
                let count = 0;
                const speed = 40;
                const increment = target / speed;

                const timer = setInterval(() => {
                    count += increment;
                    if (count >= target) {
                        entry.target.textContent = isDecimal ? target.toFixed(1) : target;
                        clearInterval(timer);
                    } else {
                        entry.target.textContent = isDecimal ? count.toFixed(1) : Math.floor(count);
                    }
                }, 25);

                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(c => counterObserver.observe(c));
}

// ================= SCROLL REVEAL OBSERVER =================
function initScrollReveal() {
    const reveals = document.querySelectorAll(".reveal");
    if (reveals.length === 0) return;

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    reveals.forEach(el => revealObserver.observe(el));
}

// ================= DYNAMIC AJAX CONTACT FORM =================
async function handleContactSubmit(event) {
    event.preventDefault();

    const form = document.getElementById("contactForm");
    const alertBox = document.getElementById("contactFormAlert");
    const submitBtn = document.getElementById("contactSubmitBtn");
    const btnText = document.getElementById("submitBtnText");
    const btnSpinner = document.getElementById("submitBtnSpinner");

    if (!form || !alertBox) return;

    // Reset alert
    alertBox.className = "hidden mb-6 p-4 rounded-xl text-xs sm:text-sm font-medium transition-all";
    alertBox.textContent = "";

    // Loading state
    if (submitBtn && btnText && btnSpinner) {
        submitBtn.disabled = true;
        btnText.classList.add("hidden");
        btnSpinner.classList.remove("hidden");
    }

    const formData = new FormData(form);

    try {
        const response = await fetch("pages/contact_process.php", {
            method: "POST",
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            alertBox.className = "mb-6 p-4 rounded-xl text-xs sm:text-sm font-medium bg-emerald-100 dark:bg-emerald-950/80 text-emerald-800 dark:text-emerald-300 border border-emerald-300 dark:border-emerald-800 block";
            alertBox.innerHTML = `<i class="fa-solid fa-circle-check mr-2"></i> ${result.message}`;
            form.reset();
        } else {
            alertBox.className = "mb-6 p-4 rounded-xl text-xs sm:text-sm font-medium bg-red-100 dark:bg-red-950/80 text-red-800 dark:text-red-300 border border-red-300 dark:border-red-800 block";
            alertBox.innerHTML = `<i class="fa-solid fa-circle-exclamation mr-2"></i> ${result.message || 'An error occurred. Please try again.'}`;
        }
    } catch (error) {
        alertBox.className = "mb-6 p-4 rounded-xl text-xs sm:text-sm font-medium bg-red-100 dark:bg-red-950/80 text-red-800 dark:text-red-300 border border-red-300 dark:border-red-800 block";
        alertBox.innerHTML = `<i class="fa-solid fa-triangle-exclamation mr-2"></i> Unable to send message right now. Please email directly at <a href="mailto:sudipanmandal@gmail.com" class="underline font-bold">sudipanmandal@gmail.com</a>.`;
    } finally {
        if (submitBtn && btnText && btnSpinner) {
            submitBtn.disabled = false;
            btnText.classList.remove("hidden");
            btnSpinner.classList.add("hidden");
        }
    }
}

// ================= DOM INITIALIZATION =================
document.addEventListener("DOMContentLoaded", () => {
    initTheme();
    runTypewriter();
    initCounters();
    initScrollReveal();
    handleScroll();
});

