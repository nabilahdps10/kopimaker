@extends('layouts.app')

@section('title', "El's Coffee Purwokerto - Specialty Coffee Roastery & Cozy Eatery")

@section('content')
<!-- Hero Section -->
<section class="relative bg-[#120d0a] text-white overflow-hidden hero-pattern py-20 lg:py-28 border-b border-[#291e17]">
    <!-- Ambient Glow effect -->
    <div class="absolute -top-40 -left-40 w-96 h-96 bg-amberGold-500/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-40 w-96 h-96 bg-coffee-600/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Headline -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-amberGold-500/15 border border-amberGold-500/30 text-amberGold-400 text-xs sm:text-sm font-medium tracking-wide">
                    <i class="fa-solid fa-location-dot"></i> Cabang Purwokerto Timur • Dekat GOR Satria
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold tracking-tight leading-[1.15]">
                    Nikmati Kopi <span class="gold-gradient-text">Specialty Nusantara</span> di Sudut Kota Purwokerto.
                </h1>

                <p class="text-base sm:text-lg text-gray-300 font-light leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Dari biji kopi pilihan roastery terkemuka Indonesia hingga sajian makanan lezat seperti Saikoro Beef Bowl dan Pasta. Rasakan suasana kafe modern bernuansa hangat yang ramah untuk nugas (WFC) maupun nongkrong santai.
                </p>

                <!-- Action CTA -->
                <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-4">
                    <a href="{{ route('menu') }}" class="px-7 py-3.5 rounded-full bg-gradient-to-r from-amberGold-400 to-amberGold-500 hover:from-amberGold-300 hover:to-amberGold-400 text-[#120d0a] font-bold text-sm tracking-wide shadow-xl shadow-amberGold-500/20 transition-all hover:scale-105 flex items-center">
                        <i class="fa-solid fa-book-open mr-2.5"></i> Lihat Menu Lengkap
                    </a>
                    <a href="{{ route('location') }}" class="px-7 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white font-semibold text-sm border border-white/20 transition-all flex items-center">
                        <i class="fa-solid fa-map-location-dot mr-2.5 text-amberGold-400"></i> Lokasi & Peta
                    </a>
                </div>

                <!-- Feature Badges -->
                <div class="pt-6 border-t border-[#291e17] grid grid-cols-3 gap-4 text-center lg:text-left">
                    <div>
                        <div class="text-2xl font-serif font-bold text-amberGold-400">100%</div>
                        <div class="text-xs text-gray-400 mt-0.5">Specialty Grade Beans</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amberGold-400">WFC Ready</div>
                        <div class="text-xs text-gray-400 mt-0.5">Full AC & Stopkontak</div>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold text-amberGold-400">10.00-22.00</div>
                        <div class="text-xs text-gray-400 mt-0.5">Buka Setiap Hari</div>
                    </div>
                </div>
            </div>

            <!-- Right Visual Image Mosaic -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Card -->
                    <div class="rounded-3xl overflow-hidden shadow-2xl border border-white/10 relative group">
                        <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=800&q=80" alt="Suasana El's Coffee Purwokerto" class="w-full h-[420px] object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#120d0a] via-transparent to-transparent"></div>
                        
                        <!-- Floating Badge on Image -->
                        <div class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-[#1c1511]/90 backdrop-blur-md border border-white/15">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-white font-serif font-bold text-base">El's Coffee Purwokerto</h4>
                                    <p class="text-xs text-amberGold-400 flex items-center mt-0.5">
                                        <i class="fa-solid fa-star mr-1"></i> 4.8 Bintang di Google Reviews
                                    </p>
                                </div>
                                <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="w-10 h-10 rounded-full bg-amberGold-400 text-[#120d0a] flex items-center justify-center hover:scale-110 transition">
                                    <i class="fa-solid fa-arrow-up-right-from-square text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mini Decorative Overlapping Card -->
                    <div class="hidden sm:block absolute -top-6 -left-6 bg-[#1a130f] p-3.5 rounded-2xl border border-white/10 shadow-xl backdrop-blur-md">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-amberGold-500/20 text-amberGold-400 flex items-center justify-center">
                                <i class="fa-solid fa-wifi text-base"></i>
                            </div>
                            <div class="pr-2">
                                <span class="block text-xs font-bold text-white">Ultra Fast Wi-Fi</span>
                                <span class="block text-[11px] text-gray-400">100 Mbps WFC Speed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Purwokerto Quick Bar -->
<section class="bg-[#1c1511] text-gray-300 py-6 border-b border-[#2a1e16]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start gap-3">
                <div class="w-11 h-11 rounded-xl bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-map-location text-lg"></i>
                </div>
                <div>
                    <h5 class="text-white font-semibold text-sm">Alamat Purwokerto</h5>
                    <p class="text-xs text-gray-400">Jl. Prof. Dr. Suharso No.2</p>
                </div>
            </div>

            <div class="flex items-center justify-center md:justify-start gap-3">
                <div class="w-11 h-11 rounded-xl bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center flex-shrink-0">
                    <i class="fa-regular fa-clock text-lg"></i>
                </div>
                <div>
                    <h5 class="text-white font-semibold text-sm">Jam Operasional</h5>
                    <p class="text-xs text-gray-400">10.00 – 22.00 WIB (Tiap Hari)</p>
                </div>
            </div>

            <div class="flex items-center justify-center md:justify-start gap-3">
                <div class="w-11 h-11 rounded-xl bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-compass text-lg"></i>
                </div>
                <div>
                    <h5 class="text-white font-semibold text-sm">Patokan Lokasi</h5>
                    <p class="text-xs text-gray-400">Dekat GOR Satria (Depan Reta)</p>
                </div>
            </div>

            <div class="flex items-center justify-center md:justify-start gap-3">
                <div class="w-11 h-11 rounded-xl bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center flex-shrink-0">
                    <i class="fa-solid fa-headset text-lg"></i>
                </div>
                <div>
                    <h5 class="text-white font-semibold text-sm">WhatsApp Call / Order</h5>
                    <p class="text-xs text-amberGold-400 font-medium">0812-2580-9988</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About & Specialty Heritage -->
<section class="py-20 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left images -->
            <div class="grid grid-cols-2 gap-4">
                <div class="space-y-4">
                    <div class="rounded-2xl overflow-hidden shadow-lg aspect-[4/5]">
                        <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80" alt="V60 Pour Over" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg aspect-square">
                        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=600&q=80" alt="Cafe Seating" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>
                <div class="space-y-4 pt-8">
                    <div class="rounded-2xl overflow-hidden shadow-lg aspect-square">
                        <img src="https://images.unsplash.com/photo-1534778101976-62847782c213?auto=format&fit=crop&w=600&q=80" alt="Latte Art" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg aspect-[4/5]">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&q=80" alt="Saikoro Beef" class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-coffee-100 text-coffee-800 text-xs font-bold uppercase tracking-wider">
                    Tentang El's Coffee
                </div>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950 leading-tight">
                    Dedikasi Kopi Nusantara & Suasana Hangat Purwokerto
                </h2>
                <p class="text-gray-600 leading-relaxed">
                    Berawal dari kecintaan terhadap ragam citarasa biji kopi terbaik Indonesia, El's Coffee telah melayani para penikmat kopi dengan standar sangrai (roasting) specialty internasional.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Kini hadir di Purwokerto, kami membawa konsep kafe modern berkarakter monokrom hangat. Bukan hanya sekadar tempat minum kopi, El's Coffee Purwokerto dirancang sebagai ruang temu yang produktif dan nyaman bagi siapa saja—mulai dari para profesional, mahasiswa yang ingin mengerjakan tugas dengan tenang, hingga keluarga yang ingin bersantap.
                </p>

                <!-- Points -->
                <div class="space-y-3 pt-2">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-amberGold-500/20 text-amberGold-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i class="fa-solid fa-check text-xs"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-800">Specialty beans dari Aceh Gayo, Mandheling, Toraja, Flores, hingga Wamena.</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-amberGold-500/20 text-amberGold-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i class="fa-solid fa-check text-xs"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-800">Menu hidangan lengkap: Asian Rice Bowls, Pasta, Desserts, dan Sharing Platters.</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-amberGold-500/20 text-amberGold-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i class="fa-solid fa-check text-xs"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-800">Fasilitas ramah nugas: WiFi kencang, banyak colokan, indoor ber-AC, dan area outdoor.</span>
                    </div>
                </div>

                <div class="pt-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center text-sm font-bold text-coffee-800 hover:text-amberGold-600 transition">
                        Baca Cerita Lengkap Kami <i class="fa-solid fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Menu Highlights -->
<section class="py-20 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="text-xs font-bold uppercase tracking-widest text-amberGold-600 bg-amberGold-50 px-3 py-1 rounded-full">Menu Pilihan</span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950 mt-3 mb-4">
                Menu Favorit di El's Coffee Purwokerto
            </h2>
            <p class="text-gray-600 text-sm sm:text-base">
                Dibuat dengan bahan baku berkualitas tinggi oleh barista dan chef berpengalaman untuk menemani setiap momen Anda.
            </p>
        </div>

        <!-- Featured Items Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredItems as $item)
            <div class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group">
                <!-- Image Container -->
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    
                    @if(!empty($item['badge']))
                    <span class="absolute top-4 left-4 bg-amberGold-500 text-[#120d0a] text-[11px] font-bold px-3 py-1 rounded-full shadow-md uppercase tracking-wider">
                        {{ $item['badge'] }}
                    </span>
                    @endif

                    <span class="absolute bottom-4 right-4 bg-black/75 backdrop-blur-md text-amberGold-400 font-bold text-base px-3.5 py-1 rounded-xl">
                        Rp {{ number_format($item['price'], 0, ',', '.') }}
                    </span>
                </div>

                <!-- Info Container -->
                <div class="p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="text-xs font-semibold text-coffee-600 uppercase tracking-wider mb-1">
                            {{ $item['category_name'] }}
                        </div>
                        <h3 class="text-xl font-serif font-bold text-gray-900 group-hover:text-amberGold-600 transition">
                            {{ $item['name'] }}
                        </h3>
                        <p class="text-gray-500 text-sm mt-2 line-clamp-2 leading-relaxed">
                            {{ $item['description'] }}
                        </p>
                    </div>

                    <div class="pt-5 mt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs text-gray-400 flex items-center">
                            <i class="fa-solid fa-mug-saucer mr-1.5 text-coffee-500"></i> Dine-in & Takeaway
                        </span>
                        <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto,%20saya%20mau%20pesan%20{{ urlencode($item['name']) }}" target="_blank" class="text-xs font-bold text-coffee-900 hover:text-amberGold-600 flex items-center transition">
                            Pesan <i class="fa-brands fa-whatsapp ml-1 text-emerald-600 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('menu') }}" class="inline-flex items-center px-8 py-3.5 rounded-full bg-coffee-900 hover:bg-coffee-950 text-white font-semibold text-sm transition-all shadow-lg hover:shadow-xl">
                <span>Lihat Semua Menu Lengkap (20+ Pilihan)</span>
                <i class="fa-solid fa-arrow-right ml-2 text-amberGold-400"></i>
            </a>
        </div>
    </div>
</section>

<!-- Cafe Facilities & Atmosphere in Purwokerto -->
<section class="py-20 bg-[#150f0c] text-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-bold uppercase tracking-widest text-amberGold-400 bg-amberGold-500/10 border border-amberGold-500/20 px-3 py-1 rounded-full">
                Fasilitas Lengkap
            </span>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-white mt-3 mb-4">
                Kenyamanan Maksimal di Cabang Purwokerto
            </h2>
            <p class="text-gray-400 text-sm sm:text-base">
                Dirancang khusus untuk mendukung produktivitas kerja jarak jauh (WFC), diskusi komunitas, hingga bersantai bersama sahabat.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($facilities as $facility)
            <div class="bg-[#1e1612] p-8 rounded-3xl border border-[#31231a] hover:border-amberGold-500/40 transition-all duration-300 group">
                <div class="w-14 h-14 rounded-2xl bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center text-2xl mb-6 group-hover:scale-110 group-hover:bg-amberGold-500 group-hover:text-[#120d0a] transition-all duration-300">
                    <i class="fa-solid {{ $facility['icon'] }}"></i>
                </div>
                <h3 class="text-xl font-serif font-bold text-white mb-2">{{ $facility['title'] }}</h3>
                <p class="text-sm text-gray-400 leading-relaxed">{{ $facility['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Photo Gallery: Google & Ambiance Photos -->
<section class="py-20 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-coffee-700 bg-coffee-100 px-3 py-1 rounded-full">
                    Galeri Foto Google & Suasana
                </span>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950 mt-3">
                    Potret Suasana El's Coffee Purwokerto
                </h2>
            </div>
            <p class="text-gray-600 text-sm max-w-md mt-4 md:mt-0">
                Sudut-sudut estetik, racikan barista, hidangan menggoda, dan kenyamanan area kafe yang tertangkap kamera.
            </p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($gallery as $photo)
            <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-square bg-gray-200 cursor-pointer">
                <img src="{{ $photo['image'] }}" alt="{{ $photo['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-5 text-white">
                    <span class="text-[11px] font-semibold text-amberGold-400 uppercase tracking-wider mb-1">{{ $photo['category'] }}</span>
                    <h4 class="text-base font-serif font-bold leading-tight">{{ $photo['title'] }}</h4>
                    <p class="text-xs text-gray-300 mt-1 line-clamp-2">{{ $photo['caption'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Google Reviews Section -->
<section class="py-20 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-14">
            <div class="inline-flex items-center gap-1.5 text-amber-500 text-sm mb-2">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <span class="text-gray-700 font-bold ml-2">4.8 / 5.0 di Google Maps</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950">
                Apa Kata Pengunjung Purwokerto?
            </h2>
            <p class="text-gray-600 text-sm sm:text-base mt-2">
                Ulasan asli dari para pelanggan setia dan Google Local Guides yang telah berkunjung.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($reviews as $rev)
            <div class="bg-[#faf8f5] p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col justify-between">
                <div>
                    <!-- Stars -->
                    <div class="flex text-amber-400 text-sm mb-4">
                        @for($i=0; $i<$rev['rating']; $i++)
                            <i class="fa-solid fa-star"></i>
                        @endfor
                    </div>
                    <p class="text-gray-700 text-sm sm:text-base italic leading-relaxed mb-6">
                        "{{ $rev['comment'] }}"
                    </p>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t border-gray-200/60">
                    <img src="{{ $rev['avatar'] }}" alt="{{ $rev['name'] }}" class="w-12 h-12 rounded-full object-cover">
                    <div>
                        <h4 class="font-bold text-gray-900 text-sm">{{ $rev['name'] }}</h4>
                        <span class="text-xs text-gray-500 flex items-center">
                            <i class="fa-brands fa-google text-xs text-red-500 mr-1"></i> {{ $rev['source'] }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Location & Map Section -->
<section class="py-20 bg-[#faf8f5] border-t border-gray-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Information -->
            <div class="lg:col-span-5 space-y-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-amberGold-600 bg-amberGold-50 px-3 py-1 rounded-full">
                        Lokasi Cabang
                    </span>
                    <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950 mt-3 mb-4">
                        Kunjungi Kami di Purwokerto Timur
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Berada di jalan protokol yang mudah dijangkau dari berbagai penjuru Purwokerto, hanya beberapa langkah dari GOR Satria.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white shadow-sm border border-gray-100">
                        <div class="w-10 h-10 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Alamat Lengkap</h4>
                            <p class="text-xs text-gray-600 mt-1 leading-relaxed">
                                Jl. Prof. Dr. Suharso No.2, RT.04/RW.02, Arcawinangun, Kec. Purwokerto Timur, Kabupaten Banyumas, Jawa Tengah 53113
                            </p>
                            <span class="inline-block mt-2 text-[11px] font-semibold text-amberGold-600 bg-amberGold-50 px-2.5 py-0.5 rounded-md">
                                Patokan: Depan Reta Beauty Clinic / Dekat GOR Satria
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white shadow-sm border border-gray-100">
                        <div class="w-10 h-10 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Jam Operasional</h4>
                            <p class="text-xs text-gray-600 mt-1">
                                Senin - Minggu: 10.00 – 22.00 WIB
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-2xl bg-white shadow-sm border border-gray-100">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-900">Kontak WhatsApp</h4>
                            <p class="text-xs text-gray-600 mt-1">
                                0812-2580-9988 (Reservasi & Informasi)
                            </p>
                        </div>
                    </div>
                </div>

                <div class="pt-2 flex flex-wrap gap-4">
                    <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="px-6 py-3 rounded-full bg-coffee-900 hover:bg-coffee-950 text-white font-semibold text-xs tracking-wide shadow-md transition flex items-center">
                        <i class="fa-solid fa-diamond-turn-right mr-2 text-amberGold-400"></i> Buka Rute Google Maps
                    </a>
                    <a href="{{ route('location') }}" class="px-6 py-3 rounded-full bg-white hover:bg-gray-50 text-gray-800 border border-gray-200 font-semibold text-xs tracking-wide shadow-sm transition flex items-center">
                        Detail Cabang & Parkir
                    </a>
                </div>
            </div>

            <!-- Right Interactive Google Maps Embed -->
            <div class="lg:col-span-7">
                <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-white aspect-[4/3] relative">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.327429184589!2d109.24838637500135!3d-7.428989592581699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c3c09f3032b%3A0xe54e207908c6ec97!2sEls%20Koffie%20Purwokerto!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                        class="w-full h-full border-0" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Reservation Call to Action -->
<section class="py-16 bg-[#18120e] text-white text-center relative overflow-hidden">
    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <h2 class="text-3xl sm:text-4xl font-serif font-bold mb-4">
            Ingin Booking Meja atau Ruang Meeting?
        </h2>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto mb-8 font-light">
            Kami melayani reservasi untuk pertemuan kerja, arisan, ulang tahun, atau sesi kerja kelompok di El's Coffee Purwokerto.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4">
            <a href="{{ route('contact') }}" class="px-8 py-3.5 rounded-full bg-gradient-to-r from-amberGold-400 to-amberGold-500 hover:from-amberGold-300 hover:to-amberGold-400 text-[#120d0a] font-bold text-sm shadow-xl transition-all hover:scale-105">
                Reservasi Meja Sekarang
            </a>
            <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto,%20saya%20ingin%20tanya%20reservasi" target="_blank" class="px-8 py-3.5 rounded-full bg-white/10 hover:bg-white/20 text-white font-semibold text-sm border border-white/20 transition">
                <i class="fa-brands fa-whatsapp text-emerald-400 mr-2"></i> Hubungi via WhatsApp
            </a>
        </div>
    </div>
</section>
@endsection
