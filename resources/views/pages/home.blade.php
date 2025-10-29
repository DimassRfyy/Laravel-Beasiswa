<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>
    <x-navbar />

    <main>
        <section id="home" class="relative py-16 md:py-24 overflow-hidden lg:px-12">
            <div class="absolute inset-0 z-0">
                <img src="assets/images/thumbnails/bg-nailart.avif" alt="Beauty background"
                    class="w-full h-full object-cover opacity-10" />
                <div class="absolute inset-0 bg-gradient-to-r from-pink-50 to-white opacity-90">
                </div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <div class="animate-fade-in-up js-animate">
                            <div
                                class="inline-block px-4 py-1 bg-pink-100 text-pink-600 rounded-full text-sm font-medium mb-6">
                                Program Beasiswa 2025</div>
                            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-pink-600 mb-6 leading-tight">
                                1000 Beasiswa <br />
                                <span class="text-gray-800">Beauty Artist</span>
                            </h1>
                            <p class="text-xl text-gray-700 mb-8 max-w-lg">Pelatihan menjadi Beauty Artist Sebagai Jalan
                                Menuju Kemandirian Ekonomi Perempuan.</p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="#apply"
                                    class="inline-block bg-pink-600 text-white font-semibold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                    Daftar Sekarang
                                </a>

                                <a href="/donation"
                                    class="hidden sm:inline-flex items-center justify-center bg-pink-600 text-white font-semibold px-6 py-3 rounded-full border border-pink-200 hover:bg-pink-600 hover:text-white transform hover:scale-105 transition duration-300">
                                    Donasi
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="ml-2">
                                        <path
                                            d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8L12 21l7.8-7.6a5.5 5.5 0 0 0 .0-7.8z" />
                                    </svg>
                                </a>

                                <a href="#sponsorship"
                                    class="inline-flex items-center justify-center bg-white text-pink-600 font-semibold px-8 py-4 rounded-full border border-pink-200 hover:border-pink-600 transition duration-300 text-center">
                                    Sponsorship
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-chevron-right ml-2">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="grid grid-cols-2 gap-4 max-w-md mx-auto lg:max-w-lg xl:max-w-xl">
                            <div class="rounded-lg overflow-hidden shadow-md h-36 lg:h-40 xl:h-44">
                                <img src="assets/images/thumbnails/banner-potrait.jpg" alt="Beauty student 1"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md mt-8 h-36 lg:h-40 xl:h-44">
                                <img src="assets/images/thumbnails/banner4.jpg" alt="Beauty student 2"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md h-36 lg:h-40 xl:h-44">
                                <img src="assets/images/thumbnails/banner5.jpg" alt="Beauty student 3"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md mt-8 h-36 lg:h-40 xl:h-44">
                                <img src="assets/images/thumbnails/banner1.jpg" alt="Beauty student 4"
                                    class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-20 left-10 w-20 h-20 bg-pink-200 rounded-full opacity-20 animate-pulse"></div>
        </section>

        <section class="py-10 bg-white border-t border-b border-pink-100">
            <div class="container mx-auto px-4">
                <div class="text-center mb-8">
                    <p class="text-gray-500 text-sm uppercase tracking-wider">Bekerjasama dengan</p>
                </div>
                <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16">
                    <div class="">
                        <img src="assets/images/logos/c.jpg" alt="Partner 1"
                            class="h-16 md:h-28 w-auto object-contain" />
                    </div>
                    <div class="">
                        <img src="assets/images/logos/e.jpg" alt="Partner 2"
                            class="h-16 md:h-36 w-auto object-contain" />
                    </div>
                    <div class="">
                        <img src="assets/images/logos/logo.png" alt="Partner 3"
                            class="h-16 md:h-28 w-auto object-contain" />
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="py-20 md:py-28 bg-white lg:px-4">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <div class="relative">
                            <img src="assets/images/thumbnails/about.webp" alt="Beauty training"
                                class="rounded-lg shadow-xl" />
                            <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-lg shadow-lg">
                                <div class="flex items-center gap-3">
                                    <div class="bg-pink-100 p-3 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users text-pink-600">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Peserta Beasiswa</p>
                                        <p class="text-xl font-bold text-pink-600">1000+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="animate-fade-in-up js-animate">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                                Program Beasiswa <span class="text-pink-600">Beauty Artist</span>
                            </h2>
                            <p class="text-lg text-gray-700 mb-6">SalonKita.id bekerjasama dengan Zoe Beauty School dan
                                Yayasan Wirausaha Muda Mandiri, memberikan beasiswa kepada 1000 perempuan Indonesia
                                untuk berkarir di beauty Industry.</p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                                <div
                                    class="bg-pink-50 rounded-xl p-5 shadow-sm hover:shadow-md transition duration-300">
                                    <div
                                        class="bg-white w-12 h-12 rounded-full flex items-center justify-center mb-4 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-book-open text-pink-600">
                                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-pink-600 mb-2">Pelatihan Intensif</h3>
                                    <p class="text-gray-700 text-sm">
                                        6 bulan pelatihan intensif bersama instruktur profesional.
                                    </p>
                                </div>

                                <div
                                    class="bg-pink-50 rounded-xl p-5 shadow-sm hover:shadow-md transition duration-300">
                                    <div
                                        class="bg-white w-12 h-12 rounded-full flex items-center justify-center mb-4 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase text-pink-600">
                                            <rect width="20" height="14" x="2" y="7" rx="2" />
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-pink-600 mb-2">Program Magang</h3>
                                    <p class="text-gray-700 text-sm">6 bulan magang di salon dan mitra industri
                                        kecantikan.</p>
                                </div>

                                <div
                                    class="bg-pink-50 rounded-xl p-5 shadow-sm hover:shadow-md transition duration-300">
                                    <div
                                        class="bg-white w-12 h-12 rounded-full flex items-center justify-center mb-4 shadow-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-award text-pink-600">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-pink-600 mb-2">Jaminan Kerja</h3>
                                    <p class="text-gray-700 text-sm">Jaminan penempatan kerja untuk peserta terbaik.</p>
                                </div>
                            </div>
                            <a href="#specializations"
                                class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700 transition duration-200">
                                Lihat Bidang Pelatihan
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-right ml-1">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="specializations" class="py-20 md:py-28 bg-pink-50 lg:px-8">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16 animate-fade-in-up js-animate">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Bidang <span class="text-pink-600">Pelatihan</span>
                    </h2>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">Kamu bisa memilih bidang pelatihan sesuai minat
                        dan potensimu untuk memulai karir di industri kecantikan.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 group animate-fade-in-up js-animate">
                        <div class="h-48 overflow-hidden">
                            <img src="assets/images/thumbnails/bg-beauty-specialist.avif" alt="Beauty Specialist"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-star text-pink-600">
                                        <polygon
                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-pink-600">Beauty Specialist</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Menjadi ahli dalam perawatan kecantikan seperti facial, massage, dan body treatment.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Teknik facial profesional</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Massage therapy</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Perawatan tubuh menyeluruh</span>
                                </li>
                            </ul>
                            <a href="#apply"
                                class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700 transition duration-200">
                                Daftar Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-right ml-1">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 group animate-fade-in-up js-animate delay-200">
                        <div class="h-48 overflow-hidden">
                            <img src="assets/images/thumbnails/bg-administration.avif" alt="Beauty Administration"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-briefcase text-pink-600">
                                        <rect width="20" height="14" x="2" y="7" rx="2" />
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-pink-600">Beauty Administration</h3>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Mengelola operasional salon seperti front office, kasir, dan administrasi reservasi.
                            </p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Manajemen front office</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Sistem kasir dan pembayaran</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Pengelolaan reservasi</span>
                                </li>
                            </ul>
                            <a href="#apply"
                                class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700 transition duration-200">
                                Daftar Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-right ml-1">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 group animate-fade-in-up js-animate delay-400">
                        <div class="h-48 overflow-hidden">
                            <img src="assets/images/thumbnails/bg-consultant.avif" alt="Beauty Consultant"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 rounded-full bg-pink-100 flex items-center justify-center mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-users text-pink-600">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-pink-600">Beauty Consultant</h3>
                            </div>
                            <p class="text-gray-700 mb-4">Memberikan konsultasi produk dan pelayanan pelanggan yang
                                prima.</p>
                            <ul class="space-y-2 mb-6">
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Konsultasi produk kecantikan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Teknik pelayanan pelanggan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-check-circle text-pink-500 mr-2 mt-1 flex-shrink-0">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                        <path d="m9 11 3 3L22 4" />
                                    </svg>
                                    <span class="text-sm">Strategi penjualan produk</span>
                                </li>
                            </ul>
                            <a href="#apply"
                                class="inline-flex items-center text-pink-600 font-medium hover:text-pink-700 transition duration-200">
                                Daftar Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-right ml-1">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="benefits" class="py-20 md:py-28 bg-white relative overflow-hidden lg:px-12">
            <div class="absolute top-0 right-0 w-full md:w-1/3 h-full bg-white-50 z-0"></div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <div class="animate-fade-in-up js-animate">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                                Manfaat <span class="text-pink-600">Program</span>
                            </h2>
                            <p class="text-lg text-gray-700 mb-8">Program beasiswa Beauty Artist menawarkan berbagai
                                manfaat untuk membantu kamu memulai karir di industri kecantikan.</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">100% GRATIS</h3>
                                        <p class="text-sm text-gray-700">Tanpa biaya pendaftaran atau pelatihan</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate delay-100">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">Sertifikat Resmi</h3>
                                        <p class="text-sm text-gray-700">Sertifikat diakui secara nasional</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate delay-200">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">Mentor Profesional</h3>
                                        <p class="text-sm text-gray-700">Didampingi mentor berpengalaman</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate delay-300">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-briefcase">
                                            <rect width="20" height="14" x="2" y="7" rx="2" />
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">Magang</h3>
                                        <p class="text-sm text-gray-700">Magang di tempat kerja nyata</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate delay-400">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart">
                                            <path
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">Komunitas</h3>
                                        <p class="text-sm text-gray-700">Komunitas pembelajaran & dukungan karier</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition duration-300 border border-pink-100 animate-fade-in-left js-animate delay-500">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-pink-600 mb-1">Jaminan Kerja</h3>
                                        <p class="text-sm text-gray-700">Jaminan kerja untuk peserta terbaik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2 mt-10 md:mt-0">
                        <div class="relative">
                            <img src="assets/images/thumbnails/manfaat.png" alt="Beauty benefits"
                                class="rounded-lg shadow-xl" />
                            <div class="absolute -top-6 -right-6 bg-white p-4 rounded-lg shadow-lg">
                                <div class="flex items-center gap-3">
                                    <div class="bg-pink-100 p-3 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-star text-pink-600">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-500">Tingkat Kepuasan</p>
                                        <p class="text-xl font-bold text-pink-600">98%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="requirements" class="py-20 md:py-28 bg-white lg:px-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="rounded-lg overflow-hidden shadow-md">
                                <img src="assets/images/thumbnails/bg-brush.avif" alt="Beauty student 1"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md mt-8 h-36 lg:h-40 xl:h-44">
                                <img src="assets/images/thumbnails/banner-potrait.jpg" alt="Beauty student 2"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md">
                                <img src="assets/images/thumbnails/requirement1.png" alt="Beauty student 3"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md mt-8">
                                <img src="assets/images/thumbnails/requirement2.png" alt="Beauty student 4"
                                    class="w-full h-full object-cover" />
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="animate-fade-in-up js-animate">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                                Siapa yang Bisa <span class="text-pink-600">Mendaftar?</span>
                            </h2>
                            <div class="space-y-6">
                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100 animate-fade-in-left js-animate">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600">Terbuka untuk semua umur</h3>
                                        <p class="text-sm text-gray-700">
                                            Terbuka untuk semua umur yang ingin belajar dan memulai karir di industri
                                            kecantikan
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100 animate-fade-in-left js-animate delay-100">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600">Belum bekerja tetap</h3>
                                        <p class="text-sm text-gray-700">
                                            Prioritas diberikan kepada yang belum memiliki pekerjaan tetap
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100 animate-fade-in-left js-animate delay-200">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600">
                                            Siap mengikuti pelatihan 6 bulan + magang 6 bulan
                                        </h3>
                                        <p class="text-sm text-gray-700">
                                            Berkomitmen penuh untuk mengikuti seluruh program selama 12 bulan
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100 animate-fade-in-left js-animate delay-300">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600">Berdomisili di Indonesia</h3>
                                        <p class="text-sm text-gray-700">
                                            Terbuka untuk seluruh perempuan Indonesia di berbagai daerah
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100 animate-fade-in-left js-animate delay-400">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600">Diutamakan dari keluarga prasejahtera
                                        </h3>
                                        <p class="text-sm text-gray-700">
                                            Prioritas diberikan kepada yang berasal dari keluarga prasejahtera
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="timeline" class="py-20 md:py-28 bg-pink-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16 animate-fade-in-up js-animate">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Timeline <span class="text-pink-600">Program</span>
                    </h2>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">Berikut adalah jadwal pelaksanaan program
                        beasiswa Beauty Artist:</p>
                </div>

                <div class="hidden md:block max-w-4xl mx-auto">
                    <div class="relative">

                        <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-pink-200"></div>

                        <div class="relative flex flex-row-reverse items-center mb-16 gap-4">
                            <div class="flex-1 w-1/2 mb-0">
                                <div class="bg-white p-6 rounded-lg shadow-md mr-8 animate-fade-in-up js-animate">
                                    <div class="flex items-center mb-3">
                                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-calendar">
                                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                                <line x1="16" x2="16" y1="2" y2="6" />
                                                <line x1="8" x2="8" y1="2" y2="6" />
                                                <line x1="3" x2="21" y1="10" y2="10" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-pink-600">Pendaftaran Dibuka</h3>
                                    </div>
                                    <div
                                        class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                        Agustus - Desember 2025</div>
                                    <p class="text-gray-700">Periode pendaftaran program beasiswa</p>
                                </div>
                            </div>
                            <div
                                class="z-10 flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full text-white shadow-md">
                                1</div>
                            <div class="flex-1 w-1/2"></div>
                        </div>
                        <div class="relative flex flex-row items-center mb-16 gap-4">
                            <div class="flex-1 w-1/2 mb-0">
                                <div
                                    class="bg-white p-6 rounded-lg shadow-md ml-8 animate-fade-in-up js-animate delay-100">
                                    <div class="flex items-center mb-3">
                                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-file-text">
                                                <path
                                                    d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                                <polyline points="14 2 14 8 20 8" />
                                                <line x1="16" x2="8" y1="13" y2="13" />
                                                <line x1="16" x2="8" y1="17" y2="17" />
                                                <line x1="10" x2="8" y1="9" y2="9" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-pink-600">Seleksi Berkas</h3>
                                    </div>
                                    <div
                                        class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                        Agustus 2025 - Januari 2026</div>
                                    <p class="text-gray-700">Proses seleksi berkas pendaftaran</p>
                                </div>
                            </div>
                            <div
                                class="z-10 flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full text-white shadow-md">
                                2</div>
                            <div class="flex-1 w-1/2"></div>
                        </div>
                        <div class="relative flex flex-row-reverse items-center mb-16 gap-4">
                            <div class="flex-1 w-1/2 mb-0">
                                <div
                                    class="bg-white p-6 rounded-lg shadow-md mr-8 animate-fade-in-up js-animate delay-200">
                                    <div class="flex items-center mb-3">
                                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-pink-600">Wawancara Online</h3>
                                    </div>
                                    <div
                                        class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                        Februari 2026</div>
                                    <p class="text-gray-700">Proses wawancara dengan kandidat terpilih</p>
                                </div>
                            </div>
                            <div
                                class="z-10 flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full text-white shadow-md">
                                3</div>
                            <div class="flex-1 w-1/2"></div>
                        </div>
                        <div class="relative flex flex-row items-center mb-16 gap-4">
                            <div class="flex-1 w-1/2 mb-0">
                                <div
                                    class="bg-white p-6 rounded-lg shadow-md ml-8 animate-fade-in-up js-animate delay-300">
                                    <div class="flex items-center mb-3">
                                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-check-circle">
                                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                                <path d="m9 11 3 3L22 4" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-pink-600">Pengumuman Peserta</h3>
                                    </div>
                                    <div
                                        class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                        Maret 2026</div>
                                    <p class="text-gray-700">Pengumuman peserta yang lolos seleksi</p>
                                </div>
                            </div>
                            <div
                                class="z-10 flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full text-white shadow-md">
                                4</div>
                            <div class="flex-1 w-1/2"></div>
                        </div>
                        <div class="relative flex flex-row-reverse items-center mb-16 gap-4">
                            <div class="flex-1 w-1/2 mb-0">
                                <div
                                    class="bg-white p-6 rounded-lg shadow-md mr-8 animate-fade-in-up js-animate delay-400">
                                    <div class="flex items-center mb-3">
                                        <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-graduation-cap">
                                                <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                                <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5" />
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-semibold text-pink-600">Pelatihan Dimulai</h3>
                                    </div>
                                    <div
                                        class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                        Juni 2026</div>
                                    <p class="text-gray-700">Awal program pelatihan intensif</p>
                                </div>
                            </div>
                            <div
                                class="z-10 flex items-center justify-center w-12 h-12 bg-pink-600 rounded-full text-white shadow-md">
                                5</div>
                            <div class="flex-1 w-1/2"></div>
                        </div>
                    </div>
                </div>
                <div class="md:hidden space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up js-animate">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 bg-pink-600 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 font-bold">
                                1</div>
                            <div>
                                <h3 class="text-xl font-semibold text-pink-600 mb-2">Pendaftaran Dibuka</h3>
                                <div
                                    class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                    Agustus - Desember 2025</div>
                                <p class="text-gray-700">Periode pendaftaran program beasiswa</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up js-animate delay-100">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 bg-pink-600 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 font-bold">
                                2</div>
                            <div>
                                <h3 class="text-xl font-semibold text-pink-600 mb-2">Seleksi Berkas</h3>
                                <div
                                    class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                    Agustus 2025 - Januari 2026</div>
                                <p class="text-gray-700">Proses seleksi berkas pendaftaran</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up js-animate delay-200">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 bg-pink-600 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 font-bold">
                                3</div>
                            <div>
                                <h3 class="text-xl font-semibold text-pink-600 mb-2">Wawancara Online</h3>
                                <div
                                    class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                    Februari 2026</div>
                                <p class="text-gray-700">Proses wawancara dengan kandidat terpilih</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up js-animate delay-300">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 bg-pink-600 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 font-bold">
                                4</div>
                            <div>
                                <h3 class="text-xl font-semibold text-pink-600 mb-2">Pengumuman Peserta</h3>
                                <div
                                    class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                    Maret 2026</div>
                                <p class="text-gray-700">Pengumuman peserta yang lolos seleksi</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md animate-fade-in-up js-animate delay-400">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 bg-pink-600 text-white w-8 h-8 rounded-full flex items-center justify-center mr-4 font-bold">
                                5</div>
                            <div>
                                <h3 class="text-xl font-semibold text-pink-600 mb-2">Pelatihan Dimulai</h3>
                                <div
                                    class="bg-pink-50 text-pink-600 text-sm font-medium py-1 px-3 rounded-full inline-block mb-2">
                                    Juni 2026</div>
                                <p class="text-gray-700">Awal program pelatihan intensif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-16 md:py-20 bg-gradient-to-r from-pink-50 to-white lg:px-12 px-2">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-12">

                        <div class="lg:w-1/3">
                            <div class="animate-scale">
                                <div class="relative">
                                    <img src="assets/images/thumbnails/banner5.jpg" alt="Mentor & Coach Illustration"
                                        class="w-full h-auto max-w-sm mx-auto rounded-2xl shadow-lg" />
                                    <div
                                        class="absolute -bottom-3 -right-3 bg-pink-600 text-white px-4 py-2 rounded-lg shadow-lg transform rotate-3">
                                        <span class="font-bold text-sm">BERGABUNG!</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:w-2/3 text-center lg:text-left">
                            <div class="animate-fade-in-up">
                                <h3 class="text-3xl md:text-4xl font-bold text-pink-600 mb-6">Jadilah Bagian Perubahan
                                </h3>
                                <p class="text-lg text-gray-700 mb-8 max-w-2xl">
                                    Bergabunglah sebagai mentor atau coach dan berikan dampak nyata bagi 1000 perempuan
                                    Indonesia. Setiap sesi yang Anda berikan akan membuka pintu kesempatan baru bagi
                                    mereka.
                                </p>

                                <div class="hidden md:grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart text-white">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Berikan dampak sosial nyata</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users text-white">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Perluas jaringan profesional</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-graduation-cap text-white">
                                                <path
                                                    d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                                                <path d="M22 10v6" />
                                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Berbagi ilmu dan pengalaman</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-white">
                                                <polygon
                                                    points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Pengembangan diri berkelanjutan</p>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <a href="mentor.html"
                                        class="inline-block bg-pink-600 text-white font-bold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                        Join Mentor
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users inline ml-2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                    <a href="coach.html"
                                        class="inline-flex items-center justify-center bg-white text-pink-600 font-bold px-8 py-4 rounded-full border-2 border-pink-600 hover:bg-pink-600 hover:text-white transition duration-300 text-center shadow-lg">
                                        Join Coach
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-graduation-cap ml-2">
                                            <path
                                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                                            <path d="M22 10v6" />
                                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 md:py-20 bg-gradient-to-r from-pink-50 to-white lg:px-12 px-2">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-2/3 text-center lg:text-left">
                            <div class="animate-fade-in-up">
                                <h3 class="text-3xl md:text-4xl font-bold text-pink-600 mb-6">Dukung Kami Dalam
                                    Mewujudkan Impian Perempuan Indonesia</h3>
                                <p class="text-lg text-gray-700 mb-8 max-w-2xl">
                                    Kami mengundang Anda untuk menjadi bagian dari keberhasilan acara ini melalui
                                    dukungan sebagai sponsor, partner, atau donasi. Kontribusi Anda akan menjadi bagian
                                    penting dalam tercapainya tujuan kegiatan ini.
                                </p>

                                <div class="hidden md:grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-heart text-white">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Memberikan dampak sosial berkelanjutan</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-users text-white">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Mendukung akses pelatihan gratis</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-graduation-cap text-white">
                                                <path
                                                    d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                                                <path d="M22 10v6" />
                                                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Investasi sosial yang bermakna</p>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-star text-white">
                                                <polygon
                                                    points="12,2 15.09,8.26 22,9.27 17,14.14 18.18,21.02 12,17.77 5.82,21.02 7,14.14 2,9.27 8.91,8.26" />
                                            </svg>
                                        </div>
                                        <p class="text-gray-700">Mendorong kemandirian ekonomi</p>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                                    <a href="coach.html"
                                        class="inline-flex items-center justify-center bg-white text-pink-600 font-bold px-8 py-4 rounded-full border-2 border-pink-600 hover:bg-pink-600 hover:text-white transition duration-300 text-center shadow-lg">
                                        Donasi
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-graduation-cap ml-2">
                                            <path
                                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z" />
                                            <path d="M22 10v6" />
                                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5" />
                                        </svg>
                                    </a>
                                    <a href="mentor.html"
                                        class="inline-block bg-pink-600 text-white font-bold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                        Sponsorship
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users inline ml-2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                    <a href="mentor.html"
                                        class="inline-block bg-pink-600 text-white font-bold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                        Partnership
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-users inline ml-2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-1/3">
                            <div class="animate-scale">
                                <div class="relative">
                                    <img src="assets/images/thumbnails/partner.jpg" alt="Mentor & Coach Illustration"
                                        class="w-full h-auto max-w-sm mx-auto rounded-2xl shadow-lg" />
                                    <div
                                        class="absolute -bottom-3 -right-3 bg-pink-600 text-white px-4 py-2 rounded-lg shadow-lg transform rotate-3">
                                        <span class="font-bold text-sm">BERGABUNG!</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="apply" class="py-16 px-2 md:py-28 bg-white relative overflow-hidden lg:px-14">
            <div class="container mx-auto px-4 relative z-10">
                <div class="flex flex-col md:flex-row items-center gap-20">

                    <div class="w-full md:w-1/2">
                        <div class="animate-fade-in-up js-animate">
                            <h2 class="text-3xl md:text-5xl font-bold text-pink-600 mb-6">Daftar Sekarang!</h2>
                            <p class="text-xl text-gray-700 mb-8 max-w-lg">Jangan lewatkan kesempatan untuk mendapatkan
                                beasiswa pelatihan kecantikan dan jaminan kerja. Daftar sekarang dan wujudkan karirmu di
                                industri kecantikan!</p>
                            <div class="space-y-4 mb-8">
                                <div class="flex items-center">
                                    <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle text-white">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Pelatihan intensif selama 6 bulan</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle text-white">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Magang di salon dan mitra industri</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="bg-pink-600 p-2 rounded-full mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-check-circle text-white">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <path d="m9 11 3 3L22 4" />
                                        </svg>
                                    </div>
                                    <p class="text-gray-700">Jaminan kerja untuk peserta terbaik</p>
                                </div>
                            </div>
                            <div class="flex items-center bg-pink-100 p-4 rounded-lg mb-8">
                                <div class="bg-pink-600 p-2 rounded-full text-white mr-4 flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-clock">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12,6 12,12 16,14" />
                                    </svg>
                                </div>
                                <p class="font-medium text-pink-700">Pendaftaran ditutup dalam xx hari lagi!</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="https://bit.ly/Pendaftaran1000BeasiswaBeautyArtist" target="_blank"
                                    class="inline-block bg-pink-600 text-white font-bold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                    Isi Form Pendaftaran
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-external-link inline ml-2">
                                        <path d="M15 3h6v6" />
                                        <path d="M10 14 21 3" />
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                    </svg>
                                </a>
                                <a href="/partnership"
                                    class="inline-flex items-center justify-center bg-white text-pink-600 font-semibold px-8 py-4 rounded-full border border-pink-200 hover:border-pink-600 transition duration-300 text-center">
                                    Jadi Partner
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-chevron-right ml-2">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 hidden md:block">
                        <div class="animate-scale">
                            <div class="relative">
                                <div class="rounded-2xl overflow-hidden">
                                    <img src="assets/images/thumbnails/register.jpg" alt="Ilustrasi Pendaftaran"
                                        class="w-full h-auto" />
                                </div>
                                <div
                                    class="absolute -bottom-4 -left-4 bg-pink-600 text-white px-4 py-2 rounded-lg shadow-lg transform -rotate-3">
                                    <span class="font-bold text-sm">DAFTAR GRATIS!</span>
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