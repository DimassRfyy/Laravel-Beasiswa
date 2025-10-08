<div>
    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar"
        class="fixed inset-y-0 left-0 transform -translate-x-full md:hidden w-72 bg-gradient-to-b from-pink-50 to-white shadow-lg z-50 transition-transform duration-300 ease-in-out">
        <div class="flex items-center justify-between p-4 border-b border-pink-100">
            <div class="flex items-center">
                <img src="{{ asset('assets/images/logos/wmm-logo-horizontal.png') }}" alt="SalonKita Logo"
                    class="h-10 w-auto">
            </div>
            <button id="close-sidebar" class="text-pink-500 hover:text-pink-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>
        <nav class="px-4 py-6">
            <ul class="space-y-6">
                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'home' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'home' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('sponsorship') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'sponsorship' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'sponsorship' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Sponsorship
                    </a>
                </li>
                <li>
                    <a href="{{ route('partnership') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'partnership' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'partnership' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Partnership
                    </a>
                </li>
                <li>
                    <a href="{{ route('mentor') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'mentor' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'mentor' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Mentor
                    </a>
                </li>
                <li>
                    <a href="{{ route('coach') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'coach' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'coach' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Coach
                    </a>
                </li>
                <li>
                    <a href="{{ route('donation') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'donation' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'donation' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Donasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog') }}"
                        class="flex items-center py-2 px-4 {{ Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.detail' ? 'text-pink-800 bg-pink-100 font-semibold' : 'text-pink-600 hover:bg-pink-50' }} rounded-md transition duration-200 sidebar-link">
                        <span
                            class="w-2 h-2 {{ Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.detail' ? 'bg-pink-600' : 'bg-pink-400' }} rounded-full mr-3"></span>
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://bit.ly/Pendaftaran1000BeasiswaBeautyArtist"
                        class="flex items-center py-2 px-4 text-pink-600 hover:bg-pink-50 rounded-md transition duration-200 sidebar-link">
                        <span class="w-2 h-2 bg-pink-400 rounded-full mr-3"></span>
                        Daftar Sekarang
                    </a>
                </li>
            </ul>
        </nav>
        <div class="absolute bottom-0 left-0 right-0 p-6 border-t border-pink-100">
            <a href="{{ route('donation') }}" class="block w-full">
                <div
                    class="flex items-center justify-center bg-pink-600 hover:bg-pink-700 text-white px-4 py-3 rounded-lg transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-heart mr-2">
                        <path
                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z" />
                    </svg>
                    <span class="font-medium">Beri Donasi</span>
                </div>
            </a>
        </div>
    </div>

    <!-- Overlay for mobile sidebar -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden hidden"></div>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 bg-white shadow-sm z-30 lg:px-8">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <!-- Logo untuk mobile (noteks) -->
                <img src="{{ asset('assets/images/logos/wmm-logo-horizontal.png') }}" alt="SalonKita Logo"
                    class="h-10 w-auto md:hidden">
                <!-- Logo untuk desktop (horizontal) -->
                <img src="{{ asset('assets/images/logos/wmm-logo-horizontal.png') }}" alt="SalonKita Logo"
                    class="h-10 w-auto hidden md:block">
            </div>

            <!-- Mobile menu button -->
            <button id="open-sidebar" class="md:hidden text-pink-600 hover:text-pink-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-menu">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
            </button>

            <!-- Desktop navigation -->
            <nav class="hidden md:block">
                <ul class="flex space-x-6 lg:space-x-8">
                    <li>
                        <a href="{{ route('home') }}"
                            class="{{ Route::currentRouteName() == 'home' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sponsorship') }}"
                            class="{{ Route::currentRouteName() == 'sponsorship' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Sponsorship
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('partnership') }}"
                            class="{{ Route::currentRouteName() == 'partnership' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Partnership
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('mentor') }}"
                            class="{{ Route::currentRouteName() == 'mentor' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Mentor
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('coach') }}"
                            class="{{ Route::currentRouteName() == 'coach' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Coach
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('donation') }}"
                            class="{{ Route::currentRouteName() == 'donation' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Donasi
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}"
                            class="{{ Route::currentRouteName() == 'blog' || Route::currentRouteName() == 'blog.detail' ? 'text-pink-800 font-semibold border-b-2 border-pink-600 pb-1' : 'text-pink-600 hover:text-pink-800' }} transition duration-200 font-medium">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://bit.ly/Pendaftaran1000BeasiswaBeautyArtist"
                            class="bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 transition duration-200 font-medium">
                            Daftar
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>