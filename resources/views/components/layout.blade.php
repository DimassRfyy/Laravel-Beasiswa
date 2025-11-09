<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? '' }} | WMM Foundation</title>
    <meta name="description" content="Program beasiswa untuk 1000 perempuan Indonesia di industri kecantikan">
    <link rel="icon" href="{{ asset('assets/images/logos/wmm-logo-noteks.png') }}">
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

        .article-content ol {
            list-style-type: decimal;
            margin-left: 1.5em;
        }

        .article-content li {
            margin-bottom: 0.5em;
        }

        .article-content p {
            margin-bottom: 1.25em;
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

        .article-content h2 {
            @apply text-2xl font-bold text-gray-800 mt-8 mb-4;
        }

        .article-content h3 {
            @apply text-xl font-semibold text-gray-800 mt-6 mb-3;
        }

        .article-content p {
            @apply text-gray-700 leading-relaxed mb-4;
        }

        .article-content ul {
            @apply list-disc list-inside text-gray-700 mb-4 space-y-2;
        }

        .article-content li {
            @apply ml-4;
        }

        .article-content blockquote {
            @apply border-l-4 border-pink-500 pl-4 italic text-gray-600 my-6;
        }

        .share-button {
            transition: all 0.3s ease;
        }

        .share-button:hover {
            transform: translateY(-2px);
        }
    </style>

    @stack('styles')
</head>

<body class="min-h-screen bg-white text-gray-800 relative pt-16 md:pt-16">

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

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Dynamic navbar shadow on scroll
        function handleNavbarScroll() {
            const navbar = document.querySelector('header');
            if (navbar) {
                if (window.scrollY > 0) {
                    navbar.classList.add('shadow-lg');
                    navbar.classList.remove('shadow-sm');
                } else {
                    navbar.classList.add('shadow-sm');
                    navbar.classList.remove('shadow-lg');
                }
            }
        }

        window.addEventListener('scroll', handleNavbarScroll);
        window.addEventListener('load', handleNavbarScroll);
    </script>
</body>

</html>