<div>
    <!-- Search Bar -->
    <div class="max-w-md mx-auto mb-8">
        <div class="relative">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Cari artikel..."
                class="w-full px-4 py-3 pl-12 pr-4 rounded-full border border-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300 focus:border-transparent">
            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-search text-pink-400">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.35-4.35" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Category Filters -->
    <div class="flex flex-wrap justify-center gap-3 mb-8">
        <button wire:click="$set('selectedCategory', '')"
            class="px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium {{ $selectedCategory === '' ? 'bg-pink-600 text-white' : '' }}">
            Semua
        </button>
        @foreach ($categories as $category)
            <button wire:click="$set('selectedCategory', '{{ $category->slug }}')"
                class="px-4 py-2 rounded-full border border-pink-200 text-pink-600 hover:bg-pink-600 hover:text-white transition duration-200 text-sm font-medium {{ $selectedCategory === $category->slug ? 'bg-pink-600 text-white' : '' }}">
                {{ $category->name }}
            </button>
        @endforeach
    </div>

    <!-- Clear Filters Button -->
    @if($search || $selectedCategory)
        <div class="text-center mb-6">
            <button wire:click="clearFilters"
                class="text-pink-600 text-sm font-medium hover:text-pink-700 transition duration-200 underline">
                Hapus Filter
            </button>
        </div>
    @endif

    <!-- Results Count -->
    @if($search || $selectedCategory)
        <div class="text-center mb-8">
            <p class="text-gray-600">
                @if($search && $selectedCategory)
                    Menampilkan {{ $blogs->total() }} artikel untuk "{{ $search }}" dalam kategori
                    {{ $categories->where('slug', $selectedCategory)->first()->name ?? '' }}
                @elseif($search)
                    Menampilkan {{ $blogs->total() }} artikel untuk "{{ $search }}"
                @elseif($selectedCategory)
                    Menampilkan {{ $blogs->total() }} artikel dalam kategori
                    {{ $categories->where('slug', $selectedCategory)->first()->name ?? '' }}
                @endif
            </p>
        </div>
    @endif

    <!-- Blog Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:px-8">
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-calendar mr-2">
                                    <path d="M8 2v4" />
                                    <path d="M16 2v4" />
                                    <rect width="18" height="18" x="3" y="4" rx="2" />
                                    <path d="M3 10h18" />
                                </svg>
                                {{ $blog->created_at->format('d M Y') }}
                            </div>
                            <h4
                                class="text-md font-semibold text-gray-800 mb-3 group-hover:text-pink-600 transition duration-200">
                                {{ $blog->title }}
                            </h4>
                            <p class="text-gray-600 text-xs mb-4 leading-relaxed">
                                {{ Str::limit(strip_tags($blog->content), 100) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($blog->user->name ?? 'Anonim') }}&background=pink&color=fff"
                                        alt="Author" class="w-8 h-8 rounded-full object-cover mr-2">
                                    <span class="text-xs text-gray-500">{{ $blog->user->name ?? 'Anonim' }}</span>
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
            <div class="col-span-4 text-center text-gray-500 py-12">
                @if($search || $selectedCategory)
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-auto text-gray-300">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.35-4.35" />
                        </svg>
                    </div>
                    <p class="text-lg font-medium mb-2">Tidak ada artikel ditemukan</p>
                    <p class="text-sm">Coba ubah kata kunci pencarian atau pilih kategori lain</p>
                @else
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                            class="mx-auto text-gray-300">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14,2 14,8 20,8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10,9 9,9 8,9" />
                        </svg>
                    </div>
                    <p class="text-lg font-medium mb-2">Belum ada artikel</p>
                    <p class="text-sm">Artikel akan segera hadir</p>
                @endif
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($blogs->hasPages())
        <div class="mt-12">
            {{ $blogs->links() }}
        </div>
    @endif

    <!-- Loading Indicator -->
    <div wire:loading class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 flex items-center space-x-3">
            <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-pink-600"></div>
            <span class="text-gray-700">Memuat...</span>
        </div>
    </div>
</div>