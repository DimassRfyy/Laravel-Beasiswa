<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} | WMM Foundation</title>
    <meta name="description" content="Program beasiswa untuk 1000 perempuan Indonesia di industri kecantikan">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts - Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Nunito', 'system-ui', 'sans-serif']
                    },
                    colors: {
                        pink: {
                            50: "#fdf2f8",
                            100: "#fce7f3",
                            200: "#fbcfe8",
                            300: "#f9a8d4",
                            400: "#f472b6",
                            500: "#ec4899",
                            600: "#db2777",
                            700: "#be185d",
                            800: "#9d174d",
                            900: "#831843",
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-in-out forwards;
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-in-out forwards;
        }

        .animate-fade-in-left {
            animation: fadeInLeft 0.5s ease-in-out forwards;
        }

        .animate-fade-in-right {
            animation: fadeInRight 0.5s ease-in-out forwards;
        }

        .animate-scale {
            animation: scale 0.8s ease-in-out forwards;
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.2;
            }

            50% {
                opacity: 0.4;
            }
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        .category-filter.active {
            background-color: #db2777;
            color: white;
        }

        .article-card {
            transition: all 0.3s ease;
        }

        .article-card.hidden {
            display: none;
        }
    </style>

    @stack('styles')
</head>

<body class="min-h-screen bg-white text-gray-800 relative">

    {{ $slot }}

    <script>
        // Mobile sidebar functionality
        const openSidebar = document.getElementById('open-sidebar');
        const closeSidebar = document.getElementById('close-sidebar');
        const mobileSidebar = document.getElementById('mobile-sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const sidebarLinks = document.querySelectorAll('.sidebar-link');

        openSidebar.addEventListener('click', () => {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebar.classList.add('translate-x-0');
            sidebarOverlay.classList.remove('hidden');
        });

        function closeMobileSidebar() {
            mobileSidebar.classList.remove('translate-x-0');
            mobileSidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }

        closeSidebar.addEventListener('click', closeMobileSidebar);
        sidebarOverlay.addEventListener('click', closeMobileSidebar);

        sidebarLinks.forEach(link => {
            link.addEventListener('click', closeMobileSidebar);
        });

        // Scroll animations
        const animatedElements = document.querySelectorAll('.js-animate');

        function checkScroll() {
            animatedElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementTop < windowHeight * 0.9) {
                    element.classList.add('animate-fade-in-up');
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        window.addEventListener('load', checkScroll);

        // Set current year in footer
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Search and Filter functionality
        const searchInput = document.getElementById('search-input');
        const categoryFilters = document.querySelectorAll('.category-filter');
        const articleCards = document.querySelectorAll('.article-card');
        const searchResults = document.getElementById('search-results');

        let currentCategory = 'all';
        let currentSearchTerm = '';

        // Search functionality
        searchInput.addEventListener('input', function (e) {
            currentSearchTerm = e.target.value.toLowerCase();
            filterArticles();
        });

        // Category filter functionality
        categoryFilters.forEach(filter => {
            filter.addEventListener('click', function () {
                // Remove active class from all filters
                categoryFilters.forEach(f => f.classList.remove('active'));
                // Add active class to clicked filter
                this.classList.add('active');

                currentCategory = this.getAttribute('data-category');
                filterArticles();
            });
        });

        function filterArticles() {
            let visibleCount = 0;

            articleCards.forEach(card => {
                const category = card.getAttribute('data-category');
                const title = card.getAttribute('data-title').toLowerCase();
                const content = card.getAttribute('data-content').toLowerCase();

                const matchesCategory = currentCategory === 'all' || category === currentCategory;
                const matchesSearch = currentSearchTerm === '' ||
                    title.includes(currentSearchTerm) ||
                    content.includes(currentSearchTerm);

                if (matchesCategory && matchesSearch) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            // Update search results text
            if (currentSearchTerm !== '' || currentCategory !== 'all') {
                let resultText = '';
                if (currentSearchTerm !== '') {
                    resultText = `Menampilkan ${visibleCount} artikel untuk "${currentSearchTerm}"`;
                } else {
                    const categoryName = getCategoryName(currentCategory);
                    resultText = `Menampilkan ${visibleCount} artikel kategori ${categoryName}`;
                }
                searchResults.textContent = resultText;
                searchResults.classList.remove('hidden');
            } else {
                searchResults.classList.add('hidden');
            }
        }

        function getCategoryName(category) {
            const categoryNames = {
                'tips-karir': 'Tips Karir',
                'kisah-sukses': 'Kisah Sukses',
                'tutorial': 'Tutorial',
                'industri': 'Industri'
            };
            return categoryNames[category] || category;
        }
    </script>
</body>

</html>