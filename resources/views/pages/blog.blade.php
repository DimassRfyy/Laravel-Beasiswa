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
                            Ikuti perjalanan program beasiswa WMM Foundation, kisah sukses alumni, dan tips karir di
                            industri
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
                            @foreach ($categories as $category)
                                <a href="#"
                                    class="category-filter px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium"
                                    data-category="{{ $category->slug }}">
                                    {{ $category->name }}
                                </a>
                            @endforeach
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
                        @forelse($blogs as $blog)
                            <div class="animate-fade-in-up">
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    <article
                                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition duration-300 group">
                                        <div class="relative overflow-hidden">
                                            <img src="{{ Storage::url($blog->thumbnail) ?? 'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=2071&auto=format&fit=crop' }}"
                                                alt="Thumbnail"
                                                class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                                            <div class="absolute top-4 left-4">
                                                <span
                                                    class="bg-pink-600 text-white px-3 py-1 rounded-full text-xs font-medium">{{ $blog->category->name ?? 'Uncategorized' }}</span>
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
                                                {{ $blog->created_at->format('d M Y') }}
                                            </div>
                                            <h3
                                                class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                                {{ $blog->title }}
                                            </h3>
                                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                                                {{ Str::limit(strip_tags($blog->content), 100) }}
                                            </p>
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->user->name ?? 'Anonim') }}&background=pink&color=fff"
                                                        alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                                    <span
                                                        class="text-xs text-gray-500">{{ $blog->user->name ?? 'Anonim' }}</span>
                                                </div>
                                                <a href="#"
                                                    class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200">Baca
                                                    →</a>
                                            </div>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        @empty
                            <div class="col-span-4 text-center text-gray-500">Belum ada artikel.</div>
                        @endforelse
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
    </main>
    <x-footer />
</x-layout>