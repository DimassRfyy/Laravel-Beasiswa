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
                    </div>
                </div>
            </div>

            <!-- Decorative elements -->
            <div class="absolute top-20 left-10 w-20 h-20 bg-pink-200 rounded-full opacity-20 animate-pulse"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 bg-pink-300 rounded-full opacity-20 animate-pulse"></div>
        </section>

        <section class="py-16 bg-white px-2 lg:px-8">
            <div class="container mx-auto px-4">
                <div class="max-w-8xl mx-auto">
                    <!-- Livewire Blog List Component -->
                    @livewire('blog-list')
                </div>
            </div>
        </section>
    </main>
    <x-footer />
</x-layout>