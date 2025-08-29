<x-layout>
    <x-slot:title>
        Details
    </x-slot:title>
    <x-navbar />

    <main>

        <section class="py-4 bg-pink-50">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <nav class="flex items-center space-x-2 text-sm text-gray-600">
                        <a href="index.html" class="hover:text-pink-600 transition duration-200">Beranda</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <a href="blog.html" class="hover:text-pink-600 transition duration-200">Blog</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <span class="text-pink-600 font-medium">5 Skill Wajib untuk Beauty Therapist Profesional</span>
                    </nav>
                </div>
            </div>
        </section>


        <section class="py-12">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                        <div class="lg:col-span-2">
                            <div class="animate-fade-in-up">

                                <div class="mb-6">
                                    <span
                                        class="bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-medium">Tips
                                        Karir</span>
                                </div>


                                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                                    5 Skill Wajib untuk Beauty Therapist Profesional
                                </h1>


                                <div class="flex flex-wrap items-center gap-6 mb-8 text-gray-600">
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1974&auto=format&fit=crop"
                                            alt="Maya Sari" class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">Maya Sari</p>
                                            <p class="text-sm text-gray-500">Beauty Expert & Trainer</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
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
                                    <div class="flex items-center text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-clock mr-2">
                                            <circle cx="12" cy="12" r="10" />
                                            <polyline points="12,6 12,12 16,14" />
                                        </svg>
                                        8 menit baca
                                    </div>
                                </div>


                                <div class="flex items-center gap-4 mb-8">
                                    <span class="text-gray-600 font-medium">Bagikan:</span>
                                    <div class="flex gap-3">
                                        <button onclick="copyLink()"
                                            class="share-button bg-gray-100 hover:bg-gray-200 p-3 rounded-full transition duration-300"
                                            title="Salin Link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-link text-gray-600">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                                                <path
                                                    d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                                            </svg>
                                        </button>
                                        <button onclick="shareToFacebook()"
                                            class="share-button bg-blue-600 hover:bg-blue-700 p-3 rounded-full transition duration-300"
                                            title="Bagikan ke Facebook">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-facebook text-white">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                            </svg>
                                        </button>
                                        <button onclick="shareToInstagram()"
                                            class="share-button bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 p-3 rounded-full transition duration-300"
                                            title="Bagikan ke Instagram">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-instagram text-white">
                                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                                <path d="m16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>


                                <div class="mb-8">
                                    <div class="animate-scale">
                                        <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=2071&auto=format&fit=crop"
                                            alt="Beauty Therapist Skills"
                                            class="w-full h-64 md:h-96 object-cover rounded-2xl shadow-lg">
                                    </div>
                                </div>


                                <div class="article-content prose prose-lg max-w-none">
                                    <p class="text-xl text-gray-700 leading-relaxed mb-8">
                                        Industri kecantikan terus berkembang pesat, dan profesi beauty therapist menjadi
                                        salah satu yang paling diminati. Namun, untuk sukses di bidang ini, ada beberapa
                                        keterampilan essential yang harus dikuasai. Berikut adalah 5 skill wajib yang
                                        akan membuat Anda menjadi beauty therapist profesional yang kompeten dan
                                        dipercaya klien.
                                    </p>

                                    <h2 id="skill-1">1. Penguasaan Teknik Facial Treatment</h2>
                                    <p>
                                        Facial treatment adalah layanan dasar yang harus dikuasai setiap beauty
                                        therapist. Skill ini mencakup pemahaman mendalam tentang jenis kulit, pemilihan
                                        produk yang tepat, dan teknik aplikasi yang benar.
                                    </p>
                                    <ul>
                                        <li>Analisis jenis kulit dan kondisi kulit klien</li>
                                        <li>Teknik cleansing, exfoliating, dan moisturizing yang tepat</li>
                                        <li>Penggunaan alat-alat facial seperti steamer dan high frequency</li>
                                        <li>Pemahaman tentang ingredient aktif dalam produk skincare</li>
                                    </ul>

                                    <blockquote>
                                        "Seorang beauty therapist yang handal harus mampu memberikan treatment yang
                                        tidak hanya membuat klien terlihat cantik, tapi juga merasa nyaman dan percaya
                                        diri." - Dr. Lina Sari, Dermatologist
                                    </blockquote>

                                    <h2 id="skill-2">2. Keterampilan Komunikasi dan Customer Service</h2>
                                    <p>
                                        Beauty therapist tidak hanya bekerja dengan tangan, tapi juga harus mampu
                                        berkomunikasi efektif dengan klien. Skill ini sangat penting untuk membangun
                                        trust dan loyalitas klien.
                                    </p>
                                    <ul>
                                        <li>Mendengarkan kebutuhan dan keluhan klien dengan empati</li>
                                        <li>Memberikan konsultasi dan saran yang tepat</li>
                                        <li>Menjelaskan prosedur treatment dengan jelas</li>
                                        <li>Menangani komplain dengan profesional</li>
                                    </ul>

                                    <h2 id="skill-3">3. Hygiene dan Sanitasi</h2>
                                    <p>
                                        Kebersihan adalah aspek yang tidak bisa ditawar dalam industri kecantikan.
                                        Beauty therapist harus memahami dan menerapkan standar hygiene yang ketat untuk
                                        menjaga keamanan klien.
                                    </p>
                                    <ul>
                                        <li>Sterilisasi alat-alat treatment</li>
                                        <li>Penggunaan produk sekali pakai yang tepat</li>
                                        <li>Menjaga kebersihan ruang treatment</li>
                                        <li>Penerapan protokol kesehatan yang berlaku</li>
                                    </ul>

                                    <h2 id="skill-4">4. Pengetahuan Anatomi dan Fisiologi Kulit</h2>
                                    <p>
                                        Pemahaman mendalam tentang struktur kulit dan cara kerjanya akan membantu beauty
                                        therapist memberikan treatment yang lebih efektif dan aman.
                                    </p>
                                    <ul>
                                        <li>Struktur lapisan kulit (epidermis, dermis, hipodermis)</li>
                                        <li>Fungsi kelenjar sebaceous dan keringat</li>
                                        <li>Proses regenerasi sel kulit</li>
                                        <li>Faktor-faktor yang mempengaruhi kondisi kulit</li>
                                    </ul>

                                    <h2 id="skill-5">5. Kemampuan Adaptasi dan Continuous Learning</h2>
                                    <p>
                                        Industri kecantikan terus berinovasi dengan teknologi dan teknik baru. Beauty
                                        therapist yang sukses adalah mereka yang selalu update dengan tren terbaru dan
                                        mau terus belajar.
                                    </p>
                                    <ul>
                                        <li>Mengikuti workshop dan training terbaru</li>
                                        <li>Mempelajari teknologi beauty terbaru</li>
                                        <li>Networking dengan sesama profesional</li>
                                        <li>Membaca jurnal dan artikel industri kecantikan</li>
                                    </ul>

                                    <h3 id="tips">Tips Mengembangkan Skill Beauty Therapist</h3>
                                    <p>
                                        Untuk mengembangkan kelima skill di atas, ada beberapa langkah praktis yang bisa
                                        Anda lakukan:
                                    </p>
                                    <ul>
                                        <li><strong>Practice makes perfect:</strong> Latihan rutin dengan berbagai jenis
                                            kulit dan kondisi</li>
                                        <li><strong>Seek mentorship:</strong> Cari mentor yang berpengalaman di industri
                                        </li>
                                        <li><strong>Join professional community:</strong> Bergabung dengan komunitas
                                            beauty therapist</li>
                                        <li><strong>Invest in education:</strong> Ikuti kursus dan sertifikasi yang
                                            kredibel</li>
                                    </ul>

                                    <p>
                                        Menguasai kelima skill ini membutuhkan waktu dan dedikasi, tapi hasilnya akan
                                        sangat berharga untuk karir Anda sebagai beauty therapist profesional. Ingat,
                                        klien tidak hanya mencari treatment yang bagus, tapi juga pengalaman yang
                                        menyenangkan dan hasil yang memuaskan.
                                    </p>

                                    <p>
                                        Jika Anda tertarik untuk mengembangkan karir di industri kecantikan, program
                                        beasiswa SalonKita bisa menjadi langkah awal yang tepat. Dengan pelatihan
                                        intensif dan bimbingan dari para ahli, Anda akan dibekali dengan semua skill
                                        yang dibutuhkan untuk menjadi beauty therapist profesional.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="lg:col-span-1">
                            <div class="sticky top-24 space-y-8">
                                <div class="bg-pink-50 rounded-2xl p-6">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-list mr-2 text-pink-600">
                                            <line x1="8" x2="21" y1="6" y2="6" />
                                            <line x1="8" x2="21" y1="12" y2="12" />
                                            <line x1="8" x2="21" y1="18" y2="18" />
                                            <line x1="3" x2="3.01" y1="6" y2="6" />
                                            <line x1="3" x2="3.01" y1="12" y2="12" />
                                            <line x1="3" x2="3.01" y1="18" y2="18" />
                                        </svg>
                                        Daftar Isi
                                    </h3>
                                    <ul class="space-y-2 text-sm">
                                        <li><a href="#skill-1"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">1.
                                                Penguasaan Teknik Facial Treatment</a></li>
                                        <li><a href="#skill-2"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">2.
                                                Keterampilan Komunikasi</a></li>
                                        <li><a href="#skill-3"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">3.
                                                Hygiene dan Sanitasi</a></li>
                                        <li><a href="#skill-4"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">4.
                                                Pengetahuan Anatomi Kulit</a></li>
                                        <li><a href="#skill-5"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">5.
                                                Kemampuan Adaptasi</a></li>
                                        <li><a href="#tips"
                                                class="text-gray-700 hover:text-pink-600 transition duration-200">Tips
                                                Mengembangkan Skill</a></li>
                                    </ul>
                                </div>


                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trending-up mr-2 text-pink-600">
                                            <polyline points="22,7 13.5,15.5 8.5,10.5 2,17" />
                                            <polyline points="16,7 22,7 22,13" />
                                        </svg>
                                        Artikel Populer
                                    </h3>
                                    <div class="space-y-4">
                                        <article class="group">
                                            <div class="flex gap-3">
                                                <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?q=80&w=2070&auto=format&fit=crop"
                                                    alt="Popular Article 1" class="w-16 h-16 object-cover rounded-lg">
                                                <div class="flex-1">
                                                    <h4
                                                        class="text-sm font-semibold text-gray-800 group-hover:text-pink-600 transition duration-200 line-clamp-2">
                                                        Perjalanan Rina: Dari Desa ke Salon Mewah Jakarta
                                                    </h4>
                                                    <p class="text-xs text-gray-500 mt-1">10 Jan 2025</p>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="group">
                                            <div class="flex gap-3">
                                                <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?q=80&w=2070&auto=format&fit=crop"
                                                    alt="Popular Article 2" class="w-16 h-16 object-cover rounded-lg">
                                                <div class="flex-1">
                                                    <h4
                                                        class="text-sm font-semibold text-gray-800 group-hover:text-pink-600 transition duration-200 line-clamp-2">
                                                        Teknik Dasar Facial Treatment untuk Pemula
                                                    </h4>
                                                    <p class="text-xs text-gray-500 mt-1">8 Jan 2025</p>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="group">
                                            <div class="flex gap-3">
                                                <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?q=80&w=2070&auto=format&fit=crop"
                                                    alt="Popular Article 3" class="w-16 h-16 object-cover rounded-lg">
                                                <div class="flex-1">
                                                    <h4
                                                        class="text-sm font-semibold text-gray-800 group-hover:text-pink-600 transition duration-200 line-clamp-2">
                                                        Membangun Personal Branding sebagai Beauty Expert
                                                    </h4>
                                                    <p class="text-xs text-gray-500 mt-1">3 Jan 2025</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-folder mr-2 text-pink-600">
                                            <path
                                                d="M20 20a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.9a2 2 0 0 1-1.69-.9L9.6 3.9A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2Z" />
                                        </svg>
                                        Kategori
                                    </h3>
                                    <div class="space-y-2">
                                        <a href="blog.html?category=tips-karir"
                                            class="flex items-center justify-between text-gray-700 hover:text-pink-600 transition duration-200 py-2">
                                            <span class="text-sm">Tips Karir</span>
                                            <span
                                                class="bg-pink-100 text-pink-600 text-xs px-2 py-1 rounded-full">12</span>
                                        </a>
                                        <a href="blog.html?category=kisah-sukses"
                                            class="flex items-center justify-between text-gray-700 hover:text-pink-600 transition duration-200 py-2">
                                            <span class="text-sm">Kisah Sukses</span>
                                            <span
                                                class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded-full">8</span>
                                        </a>
                                        <a href="blog.html?category=tutorial"
                                            class="flex items-center justify-between text-gray-700 hover:text-pink-600 transition duration-200 py-2">
                                            <span class="text-sm">Tutorial</span>
                                            <span
                                                class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full">15</span>
                                        </a>
                                        <a href="blog.html?category=industri"
                                            class="flex items-center justify-between text-gray-700 hover:text-pink-600 transition duration-200 py-2">
                                            <span class="text-sm">Industri</span>
                                            <span
                                                class="bg-purple-100 text-purple-600 text-xs px-2 py-1 rounded-full">6</span>
                                        </a>
                                    </div>
                                </div>


                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-tag mr-2 text-pink-600">
                                            <path
                                                d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.586 8.586a2 2 0 0 0 2.828 0l7.172-7.172a2 2 0 0 0 0-2.828z" />
                                            <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                                        </svg>
                                        Tags
                                    </h3>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Beauty
                                            Therapist</span>
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Facial</span>
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Skincare</span>
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Karir</span>
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Training</span>
                                        <span
                                            class="bg-gray-100 text-gray-700 text-xs px-3 py-1 rounded-full hover:bg-pink-100 hover:text-pink-600 cursor-pointer transition duration-200">Profesional</span>
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