<x-layout>
    <x-slot:title>
        Blog
    </x-slot:title>
    <x-navbar />

    <main>
        <section class="relative py-16 md:py-20 bg-gradient-to-r from-pink-50 to-white overflow-hidden">
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="animate-fade-in-up">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-pink-600 mb-6 leading-tight">
                            Cerita & Inspirasi
                        </h1>
                        <p class="text-xl text-gray-700 mb-8 max-w-2xl mx-auto">
                            Ikuti perjalanan program beasiswa WMM Foundation, kisah sukses alumni, dan tips karir di industri
                            kecantikan.
                        </p>

                        <!-- Search Bar -->
                        <div class="max-w-md mx-auto mb-8">
                            <div class="relative">
                                <input type="text" id="search-input" placeholder="Cari artikel..."
                                    class="w-full px-4 py-3 pl-12 pr-4 rounded-full border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-transparent">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-search text-pink-400">
                                        <circle cx="11" cy="11" r="8" />
                                        <path d="m21 21-4.35-4.35" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Category Filters -->
                        <div class="flex flex-wrap justify-center gap-3 mb-8">
                            <button
                                class="category-filter active px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                data-category="all">
                                Semua Artikel
                            </button>
                            <button
                                class="category-filter px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                data-category="tips-karir">
                                Tips Karir
                            </button>
                            <button
                                class="category-filter px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                data-category="kisah-sukses">
                                Kisah Sukses
                            </button>
                            <button
                                class="category-filter px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                data-category="tutorial">
                                Tutorial
                            </button>
                            <button
                                class="category-filter px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                data-category="industri">
                                Industri
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Decorative elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-pink-200 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-pink-300 rounded-full opacity-20 animate-pulse"></div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-8xl mx-auto">
                    <div class="animate-fade-in-up text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                            Artikel <span class="text-pink-600">Terbaru</span>
                        </h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:px-12">

                        <div class="animate-fade-in-up delay-100">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=2071&auto=format&fit=crop"
                                        alt="Article 1"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-pink-600 text-white px-3 py-1 rounded-full text-xs font-medium">Tips
                                            Karir</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        12 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        5 Skill Wajib untuk Beauty Therapist Profesional
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Pelajari keterampilan essential yang harus dikuasai setiap beauty therapist
                                        untuk sukses di industri kecantikan.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Maya Sari</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="animate-fade-in-up delay-200">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?q=80&w=2070&auto=format&fit=crop"
                                        alt="Article 2"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-medium">Kisah
                                            Sukses</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        10 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        Perjalanan Rina: Dari Desa ke Salon Mewah Jakarta
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Kisah inspiratif Rina yang berhasil mengubah hidupnya melalui program beasiswa
                                        SalonKita.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Tim Editorial</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="animate-fade-in-up delay-300">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?q=80&w=2070&auto=format&fit=crop"
                                        alt="Article 3"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">Tutorial</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        8 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        Teknik Dasar Facial Treatment untuk Pemula
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Panduan lengkap teknik facial treatment yang aman dan efektif untuk beauty
                                        therapist pemula.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Dr. Lina</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="animate-fade-in-up delay-100">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=1974&auto=format&fit=crop"
                                        alt="Article 4"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-medium">Industri</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        5 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        Tren Industri Kecantikan Indonesia 2025
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Analisis tren terbaru dan peluang karir di industri kecantikan Indonesia tahun
                                        2025.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Anita Dewi</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="animate-fade-in-up delay-200">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop"
                                        alt="Article 5"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-pink-600 text-white px-3 py-1 rounded-full text-xs font-medium">Tips
                                            Karir</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        3 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        Membangun Personal Branding sebagai Beauty Expert
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Strategi membangun personal branding yang kuat untuk meningkatkan karir di
                                        industri kecantikan.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Sarah Kim</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>


                        <div class="animate-fade-in-up delay-300">
                            <article
                                class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                <div class="relative overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1599305445671-ac291c95aaa9?q=80&w=2069&auto=format&fit=crop"
                                        alt="Article 6"
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="bg-green-600 text-white px-3 py-1 rounded-full text-xs font-medium">Kisah
                                            Sukses</span>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar mr-2">
                                            <path d="M8 2v4" />
                                            <path d="M16 2v4" />
                                            <rect width="18" height="18" x="3" y="4" rx="2" />
                                            <path d="M3 10h18" />
                                        </svg>
                                        1 Januari 2025
                                    </div>
                                    <h3
                                        class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                        Alumni Spotlight: Membuka Spa di Bali
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                        Cerita sukses Devi yang membuka spa resort mewah di Bali setelah lulus dari
                                        program SalonKita.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop"
                                                alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                            <span class="text-xs text-gray-500">Tim SalonKita</span>
                                        </div>
                                        <a href="#"
                                            class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">
                                            Baca →
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>


                    <div class="text-center mt-12">
                        <button
                            class="bg-pink-600 text-white font-semibold px-8 py-3 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 shadow-lg">
                            Muat Lebih Banyak
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down inline ml-2">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="animate-fade-in-up">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-12 text-center">
                            Artikel <span class="text-pink-600">Populer</span>
                        </h2>
                    </div>

                    <div class="animate-scale">
                        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-16">
                            <div class="md:flex">
                                <div class="md:w-1/2">
                                    <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?q=80&w=1974&auto=format&fit=crop"
                                        alt="Featured Article" class="w-full h-64 md:h-full object-cover">
                                </div>
                                <div class="md:w-1/2 p-8 md:p-12">
                                    <div class="flex items-center mb-4">
                                        <span
                                            class="bg-pink-100 text-pink-600 px-3 py-1 rounded-full text-sm font-medium">Featured</span>
                                        <span class="text-gray-500 text-sm ml-4">15 Januari 2025</span>
                                    </div>
                                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                                        Kisah Sukses Alumni: Dari Peserta Beasiswa Menjadi Beauty Entrepreneur
                                    </h3>
                                    <p class="text-gray-700 mb-6 leading-relaxed">
                                        Sari, alumni program beasiswa SalonKita angkatan pertama, kini telah membuka
                                        salon kecantikan sendiri di Jakarta. Simak perjalanan inspiratifnya dari nol
                                        hingga sukses membangun bisnis beauty.
                                    </p>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop"
                                                alt="Author" class="w-10 h-10 rounded-full object-cover mr-3">
                                            <div>
                                                <p class="text-sm font-medium text-gray-800">Tim SalonKita</p>
                                                <p class="text-xs text-gray-500">Editor</p>
                                            </div>
                                        </div>
                                        <a href="#"
                                            class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700 transition duration-200">
                                            Baca Selengkapnya
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-chevron-right ml-1">
                                                <path d="m9 18 6-6-6-6" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</x-layout>