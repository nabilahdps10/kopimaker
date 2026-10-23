@extends('layouts.app')

@section('title', "Lokasi & Peta Cabang Purwokerto - El's Coffee")
@section('meta_description', "Alamat lengkap El's Coffee Purwokerto: Jl. Prof. Dr. Suharso No.2, Arcawinangun, dekat GOR Satria. Buka setiap hari 10.00 - 22.00 WIB.")

@section('content')
<!-- Header Banner -->
<section class="bg-[#120d0a] text-white py-14 border-b border-[#291e17] hero-pattern relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-widest text-amberGold-400 bg-amberGold-500/10 border border-amberGold-500/20 px-3 py-1 rounded-full">
            Cabang Jawa Tengah
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold mt-4 mb-3">
            El's Coffee Purwokerto
        </h1>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto font-light">
            Temukan alamat lengkap, petunjuk arah dari berbagai landmark terkenal Purwokerto, jam operasional, dan peta navigasi langsung ke lokasi kami.
        </p>
    </div>
</section>

<!-- Location Details Section -->
<section class="py-16 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <!-- Left Info Panel -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Address Card -->
                <div class="bg-white p-7 rounded-3xl border border-gray-100 shadow-md space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-amberGold-500/15 text-amberGold-600 flex items-center justify-center flex-shrink-0 text-xl">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div>
                            <span class="text-xs font-bold text-coffee-600 uppercase tracking-wider block">Alamat Resmi</span>
                            <h3 class="text-lg font-serif font-bold text-gray-900 mt-0.5">El's Coffee Purwokerto</h3>
                        </div>
                    </div>

                    <div class="p-4 rounded-2xl bg-[#faf7f2] border border-[#eee4d6] text-sm text-gray-700 leading-relaxed">
                        <p class="font-medium text-gray-900">
                            Jl. Prof. Dr. Suharso No.2, RT.04/RW.02
                        </p>
                        <p class="text-gray-600 mt-1">
                            Kelurahan Arcawinangun, Kecamatan Purwokerto Timur, Kabupaten Banyumas, Jawa Tengah 53113
                        </p>
                    </div>

                    <!-- Landmark Notice -->
                    <div class="flex items-center gap-2.5 p-3 rounded-xl bg-amber-50 border border-amber-200/70 text-xs text-amber-900">
                        <i class="fa-solid fa-circle-info text-amber-600 flex-shrink-0"></i>
                        <span><strong>Patokan Lokasi:</strong> Tepat di depan Reta Beauty Clinic, sekitar 200 meter timur kawasan GOR Satria Purwokerto.</span>
                    </div>

                    <!-- Action buttons -->
                    <div class="pt-2 flex flex-col sm:flex-row gap-3">
                        <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="w-full text-center px-5 py-3 rounded-xl bg-gradient-to-r from-amberGold-400 to-amberGold-500 hover:from-amberGold-300 hover:to-amberGold-400 text-[#120d0a] font-bold text-xs uppercase tracking-wider shadow-md transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-diamond-turn-right text-sm"></i>
                            Buka di Google Maps
                        </a>
                        <button onclick="navigator.clipboard.writeText('Jl. Prof. Dr. Suharso No.2, Arcawinangun, Purwokerto Timur, Banyumas 53113'); alert('Alamat berhasil disalin ke clipboard!');" class="w-full sm:w-auto px-4 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold text-xs tracking-wider transition flex items-center justify-center gap-1.5">
                            <i class="fa-regular fa-copy"></i> Salin Alamat
                        </button>
                    </div>
                </div>

                <!-- Operating Hours & Contact Card -->
                <div class="bg-white p-7 rounded-3xl border border-gray-100 shadow-md space-y-4">
                    <h3 class="text-base font-serif font-bold text-gray-900 flex items-center gap-2">
                        <i class="fa-regular fa-clock text-amberGold-600"></i> Jam Operasional & Kontak
                    </h3>

                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Senin - Jumat (Weekday)</span>
                            <span class="font-bold text-gray-900">10.00 – 22.00 WIB</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">Sabtu - Minggu (Weekend)</span>
                            <span class="font-bold text-gray-900">09.00 – 22.30 WIB</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="text-gray-600">WhatsApp Resmi</span>
                            <a href="https://wa.me/6281225809988" target="_blank" class="font-bold text-emerald-600 hover:underline">0812-2580-9988</a>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-gray-600">Instagram Cabang</span>
                            <a href="https://instagram.com/elscoffee.purwokerto" target="_blank" class="font-bold text-amberGold-600 hover:underline">@elscoffee.purwokerto</a>
                        </div>
                    </div>
                </div>

                <!-- Distance from Important Landmarks -->
                <div class="bg-white p-7 rounded-3xl border border-gray-100 shadow-md space-y-3">
                    <h3 class="text-base font-serif font-bold text-gray-900 flex items-center gap-2">
                        <i class="fa-solid fa-route text-amberGold-600"></i> Estimasi Waktu Tempuh
                    </h3>
                    <ul class="space-y-2.5 text-xs text-gray-600">
                        <li class="flex items-center justify-between p-2 rounded-lg bg-gray-50">
                            <span><i class="fa-solid fa-person-running text-coffee-600 mr-2"></i> Dari GOR Satria Purwokerto</span>
                            <span class="font-bold text-gray-900">1 - 2 Menit (200 meter)</span>
                        </li>
                        <li class="flex items-center justify-between p-2 rounded-lg bg-gray-50">
                            <span><i class="fa-solid fa-graduation-cap text-coffee-600 mr-2"></i> Dari Universitas Jenderal Soedirman (UNSOED)</span>
                            <span class="font-bold text-gray-900">5 - 7 Menit</span>
                        </li>
                        <li class="flex items-center justify-between p-2 rounded-lg bg-gray-50">
                            <span><i class="fa-solid fa-tree text-coffee-600 mr-2"></i> Dari Alun-Alun Purwokerto</span>
                            <span class="font-bold text-gray-900">10 Menit</span>
                        </li>
                        <li class="flex items-center justify-between p-2 rounded-lg bg-gray-50">
                            <span><i class="fa-solid fa-train text-coffee-600 mr-2"></i> Dari Stasiun Kereta Api Purwokerto</span>
                            <span class="font-bold text-gray-900">12 - 15 Menit</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Interactive Map Embed -->
            <div class="lg:col-span-7 space-y-6">
                <!-- Map Container -->
                <div class="bg-white p-3 rounded-3xl border border-gray-100 shadow-xl overflow-hidden">
                    <div class="rounded-2xl overflow-hidden h-[460px] relative">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.327429184589!2d109.24838637500135!3d-7.428989592581699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c3c09f3032b%3A0xe54e207908c6ec97!2sEls%20Koffie%20Purwokerto!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Live directions helper banner -->
                <div class="bg-gradient-to-r from-coffee-900 to-coffee-950 text-white p-6 rounded-3xl shadow-lg flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-amberGold-400 text-[#120d0a] flex items-center justify-center text-xl flex-shrink-0">
                            <i class="fa-solid fa-location-arrow"></i>
                        </div>
                        <div>
                            <h4 class="font-serif font-bold text-base">Navigasi Langsung ke Kafe</h4>
                            <p class="text-xs text-gray-300 mt-0.5">Buka aplikasi Google Maps / Waze langsung di HP Anda untuk rute tercepat.</p>
                        </div>
                    </div>
                    <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="px-5 py-2.5 rounded-full bg-amberGold-400 hover:bg-amberGold-300 text-[#120d0a] text-xs font-bold uppercase tracking-wider transition whitespace-nowrap shadow-md">
                        Mulai Rute
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Facilities at Purwokerto Branch -->
<section class="py-16 bg-white border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-amberGold-600 bg-amberGold-50 px-3 py-1 rounded-full">
                Kenyamanan Anda
            </span>
            <h2 class="text-3xl font-serif font-bold text-coffee-950 mt-3 mb-2">
                Fasilitas yang Tersedia di Purwokerto
            </h2>
            <p class="text-gray-600 text-sm">Semua yang Anda butuhkan untuk bersantai dan tetap produktif.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($facilities as $f)
            <div class="p-6 rounded-2xl bg-[#faf8f5] border border-gray-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center text-lg flex-shrink-0">
                    <i class="fa-solid {{ $f['icon'] }}"></i>
                </div>
                <div>
                    <h4 class="font-serif font-bold text-gray-900 text-base mb-1">{{ $f['title'] }}</h4>
                    <p class="text-xs text-gray-600 leading-relaxed">{{ $f['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Google Photos Gallery Showcase -->
<section class="py-16 bg-[#faf8f5] border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-coffee-800 bg-coffee-100 px-3 py-1 rounded-full">
                Foto-Foto di Google & Suasana
            </span>
            <h2 class="text-3xl font-serif font-bold text-coffee-950 mt-3 mb-2">
                Galeri Visual Cabang Purwokerto
            </h2>
            <p class="text-gray-600 text-sm">Koleksi foto area dalam (indoor AC), outdoor garden, mesin espresso, serta sajian menu terfavorit.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($gallery as $img)
            <div class="rounded-2xl overflow-hidden shadow-md bg-white border border-gray-100 group flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <img src="{{ $img['image'] }}" alt="{{ $img['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 bg-black/70 text-white text-[10px] uppercase font-bold px-2 py-0.5 rounded backdrop-blur-sm">
                        {{ $img['category'] }}
                    </span>
                </div>
                <div class="p-4 flex-grow flex flex-col justify-between">
                    <h4 class="font-bold text-gray-900 text-sm mb-1">{{ $img['title'] }}</h4>
                    <p class="text-xs text-gray-500 line-clamp-2">{{ $img['caption'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
