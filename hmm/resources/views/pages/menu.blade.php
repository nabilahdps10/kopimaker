@extends('layouts.app')

@section('title', "Daftar Menu & Harga - El's Coffee Purwokerto")
@section('meta_description', "Daftar menu lengkap El's Coffee Purwokerto: Specialty Espresso, Manual Brew Single Origin, Choco Mint, Rice Bowl Saikoro, Pasta, dan Snacks lezat.")

@section('content')
<!-- Header Banner -->
<section class="bg-[#120d0a] text-white py-14 border-b border-[#291e17] hero-pattern relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-widest text-amberGold-400 bg-amberGold-500/10 border border-amberGold-500/20 px-3 py-1 rounded-full">
            Specialty Coffee & Eatery
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold mt-4 mb-3">
            Daftar Menu & Kisaran Harga
        </h1>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto font-light">
            Temukan citarasa favorit Anda mulai dari kopi specialty nusantara, minuman signature, makanan berat yang lezat, hingga kudapan santai.
        </p>

        <!-- Search Bar -->
        <div class="max-w-xl mx-auto mt-8">
            <form action="{{ route('menu') }}" method="GET" class="relative flex items-center">
                <input type="hidden" name="category" value="{{ $activeCategory }}">
                <div class="absolute left-4 text-gray-400 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <input 
                    type="text" 
                    name="q" 
                    value="{{ $searchQuery }}" 
                    placeholder="Cari menu (contoh: Americano, Saikoro, Matcha, Platter)..." 
                    class="w-full pl-12 pr-28 py-3.5 rounded-full bg-[#1e1612] text-white placeholder-gray-400 border border-[#3b2b21] focus:border-amberGold-400 focus:outline-none text-sm transition"
                >
                <button type="submit" class="absolute right-2 px-5 py-2 rounded-full bg-amberGold-500 hover:bg-amberGold-400 text-[#120d0a] text-xs font-bold uppercase tracking-wider transition">
                    Cari
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Category Filter Tabs -->
<section class="sticky top-20 z-40 bg-white/95 backdrop-blur-md border-b border-gray-200 py-3 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 overflow-x-auto scrollbar-none">
        <div class="flex items-center space-x-2 sm:space-x-3 min-w-max">
            @foreach($categories as $cat)
                <a 
                    href="{{ route('menu', ['category' => $cat['id'], 'q' => $searchQuery]) }}" 
                    class="px-4 py-2 rounded-full text-xs font-semibold tracking-wide transition-all flex items-center gap-2 {{ $activeCategory === $cat['id'] ? 'bg-coffee-900 text-white shadow-md' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    <i class="fa-solid {{ $cat['icon'] }} {{ $activeCategory === $cat['id'] ? 'text-amberGold-400' : 'text-gray-500' }}"></i>
                    <span>{{ $cat['name'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Menu Listing Grid -->
<section class="py-14 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Results info -->
        <div class="flex flex-col sm:flex-row justify-between items-baseline mb-8 pb-4 border-b border-gray-200">
            <div>
                <h2 class="text-2xl font-serif font-bold text-coffee-950">
                    @if($activeCategory !== 'all')
                        {{ collect($categories)->firstWhere('id', $activeCategory)['name'] ?? 'Kategori Menu' }}
                    @else
                        Semua Pilihan Menu
                    @endif
                </h2>
                <p class="text-xs text-gray-500 mt-1">
                    Menampilkan {{ $totalItems }} pilihan menu tersedia di Cabang Purwokerto
                    @if(!empty($searchQuery))
                        untuk pencarian "<span class="font-semibold text-gray-800">{{ $searchQuery }}</span>"
                    @endif
                </p>
            </div>

            @if(!empty($searchQuery) || $activeCategory !== 'all')
            <div class="mt-3 sm:mt-0">
                <a href="{{ route('menu') }}" class="text-xs font-semibold text-amberGold-600 hover:text-amberGold-700 underline flex items-center">
                    <i class="fa-solid fa-rotate-left mr-1.5"></i> Reset Filter & Pencarian
                </a>
            </div>
            @endif
        </div>

        @if(count($items) === 0)
        <!-- Empty State -->
        <div class="text-center py-20 bg-white rounded-3xl border border-gray-100 p-8">
            <div class="w-16 h-16 rounded-full bg-amberGold-100 text-amberGold-600 flex items-center justify-center mx-auto text-2xl mb-4">
                <i class="fa-solid fa-mug-hot"></i>
            </div>
            <h3 class="text-lg font-serif font-bold text-gray-900 mb-2">Menu Tidak Ditemukan</h3>
            <p class="text-sm text-gray-500 max-w-md mx-auto mb-6">
                Maaf, menu yang Anda cari tidak sesuai dengan kata kunci pencarian. Silakan coba cari kata kunci lain seperti "kopi", "beef", "rice", atau reset filter.
            </p>
            <a href="{{ route('menu') }}" class="px-6 py-2.5 rounded-full bg-coffee-900 text-white text-xs font-bold uppercase tracking-wider">
                Tampilkan Semua Menu
            </a>
        </div>
        @else
        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($items as $item)
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                <!-- Image Container -->
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    
                    @if(!empty($item['badge']))
                    <span class="absolute top-4 left-4 bg-amberGold-500 text-[#120d0a] text-[11px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                        {{ $item['badge'] }}
                    </span>
                    @endif

                    <span class="absolute bottom-4 right-4 bg-black/80 backdrop-blur-md text-amberGold-400 font-bold text-base px-3.5 py-1 rounded-xl shadow-md">
                        Rp {{ number_format($item['price'], 0, ',', '.') }}
                    </span>
                </div>

                <!-- Info Container -->
                <div class="p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="text-[11px] font-semibold text-coffee-600 uppercase tracking-wider mb-1">
                            {{ $item['category_name'] }}
                        </div>
                        <h3 class="text-xl font-serif font-bold text-gray-900 group-hover:text-amberGold-600 transition">
                            {{ $item['name'] }}
                        </h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                            {{ $item['description'] }}
                        </p>
                    </div>

                    <div class="pt-5 mt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs text-gray-400 flex items-center">
                            <i class="fa-solid fa-store mr-1 text-coffee-500"></i> Purwokerto Timur
                        </span>
                        <a 
                            href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto,%20saya%20mau%20order%20menu:%20{{ urlencode($item['name']) }}%20(Rp%20{{ number_format($item['price'], 0, ',', '.') }})" 
                            target="_blank" 
                            class="px-4 py-2 rounded-full bg-coffee-50 hover:bg-amberGold-500 text-coffee-900 hover:text-[#120d0a] font-bold text-xs transition flex items-center gap-1.5"
                        >
                            <span>Order</span>
                            <i class="fa-brands fa-whatsapp text-emerald-600 group-hover:text-[#120d0a] text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

    </div>
</section>

<!-- Menu Notice Note -->
<section class="py-12 bg-white border-t border-gray-100 text-xs text-gray-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-2">
        <p>* Harga dapat sedikit bervariasi sewaktu-waktu tergantung kebijakan manajemen kafe atau aplikasi pesan antar (GoFood / GrabFood / ShopeeFood).</p>
        <p>* Semua sajian kopi dapat dipesan dengan pilihan susu alternatif (oat milk / soy milk) sesuai ketersediaan.</p>
    </div>
</section>
@endsection
