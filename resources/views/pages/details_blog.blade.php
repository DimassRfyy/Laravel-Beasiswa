<x-layout>
    <x-slot:title>
        Details
    </x-slot:title>
    <x-navbar />

    <main>

        <section class="py-4 bg-pink-50 lg:px-12">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <nav class="flex items-center space-x-2 text-sm text-gray-600">
                        <a href="{{ route('home') }}" class="hover:text-pink-600 transition duration-200">Beranda</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <a href="{{ route('blog') }}" class="hover:text-pink-600 transition duration-200">Blog</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-right">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <span class="text-pink-600 font-medium">{{ $blog->title }}</span>
                    </nav>
                </div>
            </div>
        </section>


        <section class="py-12 lg:px-12">
            <div class="container mx-auto px-4">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                        <div class="lg:col-span-2">
                            <div class="animate-fade-in-up">
                                <div class="mb-6">
                                    <span
                                        class="bg-pink-100 text-pink-600 px-4 py-2 rounded-full text-sm font-medium">{{ $blog->category->name ?? 'Tanpa Kategori' }}</span>
                                </div>

                                <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                                    {{ $blog->title }}
                                </h1>

                                <div class="flex flex-wrap items-center gap-6 mb-8 text-gray-600">
                                    <div class="flex items-center">
                                        <img src="{{ ($blog->user && $blog->user->avatar)
            ? Storage::url($blog->user->avatar)
            : 'https://ui-avatars.com/api/?name=' . urlencode($blog->user->name ?? 'Anonim') . '&background=pink&color=fff' }}"
                                        alt="{{ $blog->user->name ?? 'Anonim' }}" loading="lazy" decoding="async"
                                        onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode($blog->user->name ?? 'Anonim') }}&background=pink&color=fff'"
                                            alt="{{ $blog->user->name ?? 'Anonim' }}"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div>
                                            <p class="font-medium text-gray-800">{{ $blog->user->name ?? 'Anonim' }}</p>
                                            <p class="text-sm text-gray-500">{{ $blog->user->occupation }}</p>
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
                                        {{ $blog->created_at->format('d M Y') }}
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
                                        <img src="{{ Storage::url($blog->thumbnail) ?? 'https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?q=80&w=2071&auto=format&fit=crop' }}"
                                            alt="{{ $blog->title }}"
                                            class="w-full h-64 md:h-96 object-cover rounded-2xl shadow-lg">
                                    </div>
                                </div>

                                <div class="article-content prose prose-lg max-w-none"
                                    style="ol { list-style-type: decimal; margin-left: 1.5em; } li { margin-bottom: 0.5em; } p { margin-bottom: 1.25em; }">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-1">
                            <div class="sticky top-24 space-y-8">
                                <div class="bg-white rounded-2xl p-6 shadow-lg">
                                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-trending-up mr-2 text-pink-600">
                                            <polyline points="22,7 13.5,15.5 8.5,10.5 2,17" />
                                            <polyline points="16,7 22,7 22,13" />
                                        </svg>
                                        Artikel Lainnya
                                    </h3>
                                    <div class="space-y-4">
                                        @foreach ($otherBlogs as $otherBlog)
                                            <a href="{{ route('blog.detail', $otherBlog->slug) }}" class="group block py-1">
                                                <div class="flex gap-3">
                                                    <img src="{{ Storage::url($otherBlog->thumbnail) ?? 'https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?q=80&w=2070&auto=format&fit=crop' }}"
                                                        alt="{{ $otherBlog->title }}"
                                                        class="w-16 h-16 object-cover rounded-lg">
                                                    <div class="flex-1">
                                                        <h4
                                                            class="text-sm font-semibold text-gray-800 group-hover:text-pink-600 transition duration-200 line-clamp-2">
                                                            {{ $otherBlog->title }}
                                                        </h4>
                                                        <p class="text-xs text-gray-500 mt-1">
                                                            {{ $otherBlog->created_at->format('d M Y') }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
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
                                        @foreach ($categories as $category)
                                            <a href="#"
                                                class="flex items-center justify-between text-gray-700 hover:text-pink-600 transition duration-200 py-2">
                                                <span class="text-sm">{{ $category->name }}</span>
                                                <span
                                                    class="bg-pink-100 text-pink-600 text-xs px-2 py-1 rounded-full">{{ $category->blogs_count }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Share functionality
        function copyLink() {
            alert('Link telah disalin!');
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                // Show success message
                const button = event.target.closest('button');
                const originalHTML = button.innerHTML;
                button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check text-green-600"><path d="M20 6 9 17l-5-5"/></svg>';

                setTimeout(() => {
                    button.innerHTML = originalHTML;
                }, 2000);
            }).catch(err => {
                console.error('Failed to copy link: ', err);
            });
        }

        function shareToFacebook() {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${title}`;
            window.open(shareUrl, '_blank', 'width=600,height=400');
        }

        function shareToInstagram() {
            // Instagram doesn't have direct URL sharing, so we'll copy the link and show a message
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link telah disalin! Anda dapat membagikannya di Instagram Stories atau Bio.');
            }).catch(err => {
                console.error('Failed to copy link: ', err);
                alert('Silakan salin link secara manual: ' + url);
            });
        }
    </script>

    <x-footer />
</x-layout>