<x-layout>
    <x-slot:title>
        Donation
    </x-slot:title>
    <x-navbar />

    <main>
        <section class="relative py-16 md:py-24 overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?q=80&w=2070&auto=format&fit=crop"
                    alt="Beauty background" class="w-full h-full object-cover opacity-10" />
                <div class="absolute inset-0 bg-gradient-to-r from-pink-50 to-white opacity-90"></div>
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-4xl mx-auto">
                    <div class="animate-fade-in-up">
                        <div
                            class="inline-block px-4 py-1 bg-pink-100 text-pink-600 rounded-full text-sm font-medium mb-6">
                            💖 Program Donasi 💖</div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-pink-600 mb-6 leading-tight">
                            Satu Donasi, <br />
                            <span class="text-gray-800">Seribu Harapan</span>
                        </h1>
                        <p class="text-xl text-gray-700 mb-8 max-w-3xl mx-auto">
                            Banyak perempuan berhenti sekolah terlalu dini, bukan karena mereka tidak mampu, tetapi
                            karena kesempatan yang hilang. Melalui Program 1.000 Beasiswa Beauty Artist, kami memberikan
                            mereka keterampilan, keyakinan diri, dan
                            peluang untuk membangun masa depan yang lebih baik.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="#donation-form"
                                class="inline-block bg-pink-600 text-white font-semibold px-8 py-4 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 text-center shadow-lg">
                                Donasi Sekarang
                            </a>
                            <a href="#about-donation"
                                class="inline-flex items-center justify-center bg-white text-pink-600 font-semibold px-8 py-4 rounded-full border border-pink-200 hover:border-pink-600 transition duration-300 text-center">
                                Pelajari Lebih Lanjut
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                    strokeLinejoin="round" class="lucide lucide-chevron-right ml-2">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="absolute top-20 left-10 w-20 h-20 bg-pink-200 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-pink-300 rounded-full opacity-20 animate-pulse">
            </div>
        </section>

        <section id="about-donation" class="py-20 md:py-28 bg-white lg:px-16">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <div class="relative mb-10">
                            <img src="assets/images/thumbnails/donation_ilustration3.jpg" alt="Donation impact"
                                class="rounded-lg shadow-xl" />
                        </div>
                        <div class="bg-pink-50 p-6 rounded-lg border-l-4 border-pink-600">
                            <div class="flex items-center mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                    strokeLinejoin="round" class="lucide lucide-lightbulb text-pink-600 mr-2">
                                    <path
                                        d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                                    <path d="M9 18h6" />
                                    <path d="M10 22h4" />
                                </svg>
                                <h4 class="font-semibold text-pink-600">Tahukah Anda?</h4>
                            </div>
                            <p class="text-gray-700">
                                <strong>Setiap Rp100.000</strong> yang Anda berikan dapat mengubah hidup seseorang dan
                                memberikan mereka kesempatan untuk mandiri secara ekonomi.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <div class="animate-fade-in-up js-animate">
                            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">
                                Dengan Berdonasi, <span class="text-pink-600">Anda Membantu</span>
                            </h2>
                            <div class="space-y-4 mb-8">
                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                            strokeLinecap="round" strokeLinejoin="round"
                                            class="lucide lucide-graduation-cap">
                                            <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                                            <path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600 mb-1">Membiayai Pelatihan Kecantikan
                                            Profesional</h3>
                                        <p class="text-sm text-gray-700">Memberikan akses pelatihan berkualitas
                                            tinggi dengan standar industri internasional</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                            strokeLinecap="round" strokeLinejoin="round"
                                            class="lucide lucide-package">
                                            <line x1="16.5" x2="7.5" y1="9.4" y2="4.21" />
                                            <path d="m21 16-4 2-4-2-4 2-4-2v-6l4-2 4 2 4-2 4 2z" />
                                            <polyline points="7.5,4.21 7.5,14.3 16.5,9.4 16.5,19.79" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600 mb-1">Menyediakan Peralatan Praktik
                                        </h3>
                                        <p class="text-sm text-gray-700">Memastikan setiap peserta memiliki akses ke
                                            peralatan dan produk kecantikan terbaik</p>
                                    </div>
                                </div>
                                <div
                                    class="flex items-start bg-white p-4 rounded-lg shadow-sm border border-pink-100">
                                    <div class="bg-pink-100 p-2 rounded-full text-pink-600 mr-4 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                            strokeLinecap="round" strokeLinejoin="round"
                                            class="lucide lucide-briefcase">
                                            <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-pink-600 mb-1">Membuka Akses Kerja atau Usaha
                                            Mandiri</h3>
                                        <p class="text-sm text-gray-700">Menghubungkan lulusan dengan peluang kerja
                                            dan mendukung mereka memulai usaha sendiri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-6 bg-gradient-to-r from-pink-50 to-white">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col md:flex-row items-center gap-8">

                        <div class="md:w-1/2">
                            <div class="animate-scale">
                                <img src="assets/images/thumbnails/donation.png" alt="Ilustrasi Donasi"
                                    class="w-full h-auto max-w-xs mx-auto" />
                            </div>
                        </div>

                        <div class="md:w-1/2 text-center md:text-left">
                            <div class="animate-fade-in-up">
                                <h3 class="text-2xl md:text-3xl font-bold text-pink-600 mb-4">Donasi Anda, Harapan
                                    Mereka</h3>
                                <p class="text-gray-700 mb-6 text-lg">Setiap kontribusi Anda membantu mewujudkan
                                    mimpi perempuan Indonesia untuk berkarir di industri kecantikan.</p>
                                <a href="/donation"
                                    class="inline-block bg-pink-600 text-white font-semibold px-8 py-3 rounded-full hover:bg-pink-700 transform hover:scale-105 transition duration-300 shadow-lg">
                                    Donasi Sekarang
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                        strokeLinejoin="round" class="lucide lucide-heart inline ml-2">
                                        <path
                                            d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="donation-form" class="py-20 md:py-28 bg-pink-600 text-white relative overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?q=80&w=2070&auto=format&fit=crop"
                    alt="Beauty background" class="w-full h-full object-cover opacity-10" />
            </div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="text-center max-w-4xl mx-auto mb-12">
                    <div class="animate-fade-in-up js-animate">
                        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ubah Hidup Seseorang Hari Ini</h2>
                        <p class="text-lg mb-8 max-w-2xl mx-auto opacity-90">Scan QRIS di bawah ini untuk berdonasi
                            dengan mudah. Setiap kontribusi akan langsung disalurkan untuk program beasiswa.</p>
                    </div>
                </div>

                <div class="max-w-4xl mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">

                        <div class="lg:w-1/2">
                            <div class="bg-white rounded-2xl p-8 shadow-2xl">
                                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Scan QRIS untuk Donasi
                                </h3>

                                <div class="w-64 h-64 mx-auto rounded-xl flex items-center justify-center mb-6">
                                    <img src="assets/images/thumbnails/qris.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="lg:w-1/2 text-center lg:text-left">
                            <div class="mb-8">
                                <h3 class="text-3xl font-bold mb-4">Sudah Transfer?</h3>
                                <p class="text-lg opacity-90 mb-6">Kirim bukti transfer Anda melalui WhatsApp untuk
                                    konfirmasi donasi</p>
                                <div class="bg-white/20 rounded-lg p-4 mb-6">
                                    <div class="flex items-center justify-center lg:justify-start mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                            strokeLinecap="round" strokeLinejoin="round"
                                            class="lucide lucide-check-circle mr-2">
                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                                            <polyline points="22,4 12,14.01 9,11.01" />
                                        </svg>
                                        <span class="font-semibold">Proses Cepat &amp; Mudah</span>
                                    </div>
                                    <p class="text-sm opacity-75">Tim kami akan segera memverifikasi donasi Anda
                                        dalam 1x24 jam</p>
                                </div>
                            </div>
                            <a href="https://wa.me/6281234567890?text=Halo,%20saya%20sudah%20melakukan%20donasi%20untuk%20Program%201000%20Beasiswa%20Beauty%20Artist.%20Berikut%20bukti%20transfernya:"
                                target="_blank"
                                class="inline-flex items-center justify-center bg-green-500 text-white font-bold px-8 py-4 rounded-full hover:bg-green-600 transform hover:scale-105 transition duration-300 text-lg shadow-lg w-full lg:w-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                                    strokeLinejoin="round" class="lucide lucide-message-circle mr-3">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                </svg>
                                Kirim Bukti Donasi
                            </a>
                            <p class="mt-4 text-sm opacity-75">Klik tombol di atas untuk mengirim bukti transfer via
                                WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</x-layout>