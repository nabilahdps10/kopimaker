@extends('layouts.app')

@section('title', "Tentang Kami - El's Coffee Purwokerto")
@section('meta_description', "Mengenal perjalanan El's Coffee dari roastery specialty nusantara hingga hadir memberi kenyamanan ruang temu di Purwokerto.")

@section('content')
<!-- Header Banner -->
<section class="bg-[#120d0a] text-white py-16 border-b border-[#291e17] hero-pattern relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-widest text-amberGold-400 bg-amberGold-500/10 border border-amberGold-500/20 px-3 py-1 rounded-full">
            Our Story Since 2008
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold mt-4 mb-3">
            Cerita & Dedikasi El's Coffee
        </h1>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto font-light leading-relaxed">
            Dari kebun kopi terbaik di pelosok nusantara hingga tersaji hangat di cangkir Anda di Purwokerto.
        </p>
    </div>
</section>

<!-- Story Section 1: The Origin -->
<section class="py-20 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="rounded-3xl overflow-hidden shadow-xl aspect-[4/3] relative">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=900&q=80" alt="Roasting Coffee El's Coffee" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-amberGold-400 font-bold block mb-1">Authentic Specialty Roastery</span>
                    <h3 class="text-xl font-serif font-bold">Standard Sangrai Berkualitas Tinggi</h3>
                </div>
            </div>

            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-coffee-100 text-coffee-800 text-xs font-bold uppercase tracking-wider">
                    Awal Mula
                </div>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950">
                    Menghubungkan Pecinta Kopi dengan Biji Terbaik Indonesia
                </h2>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    El's Coffee berdiri pada tahun 2008 bermula dari komitmen kuat untuk memperkenalkan keistimewaan biji kopi asli Indonesia kepada dunia. Melalui teknik roasting terstandarisasi, kami mengeksplorasi profil rasa unik dari setiap daerah penghasil kopi.
                </p>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    Mulai dari aroma rempah floral dari <strong>Aceh Gayo</strong>, body tebal nan legit dari <strong>Sumatra Mandheling</strong>, kelembutan citrus dari <strong>Toraja Kalosi</strong>, hingga karakter manis dari <strong>Flores Bajawa</strong> dan <strong>Papua Wamena</strong>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Story Section 2: Why Purwokerto -->
<section class="py-20 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="order-2 lg:order-1 space-y-6">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amberGold-50 text-amberGold-700 text-xs font-bold uppercase tracking-wider">
                    Cabang Purwokerto
                </div>
                <h2 class="text-3xl sm:text-4xl font-serif font-bold text-coffee-950">
                    Hadir Menjadi Rumah Kedua di Kota Purwokerto
                </h2>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    Melihat antusiasme masyarakat, akademisi mahasiswa (UNSOED dan sekitarnya), serta para pekerja remote di Purwokerto yang menginginkan kafe dengan kualitas minuman prima dan suasana yang kondusif, El's Coffee membuka cabangnya di <strong>Jl. Prof. Dr. Suharso No.2</strong>, tepat di kawasan strategis dekat GOR Satria.
                </p>
                <p class="text-gray-600 leading-relaxed text-sm sm:text-base">
                    Desain kafe mengusung sentuhan monokrom modern yang bersih dipadukan dengan aksen kayu hangat, menciptakan atmosfer yang santai namun tetap fokus untuk bekerja maupun bertukar ide.
                </p>
                
                <div class="pt-2">
                    <a href="{{ route('location') }}" class="inline-flex items-center px-6 py-3 rounded-full bg-coffee-900 hover:bg-coffee-950 text-white font-semibold text-xs tracking-wider transition">
                        <span>Lihat Lokasi Cabang Purwokerto</span>
                        <i class="fa-solid fa-arrow-right ml-2 text-amberGold-400"></i>
                    </a>
                </div>
            </div>

            <div class="order-1 lg:order-2 rounded-3xl overflow-hidden shadow-xl aspect-[4/3] relative">
                <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=900&q=80" alt="Suasana Interior El's Coffee Purwokerto" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-amberGold-400 font-bold block mb-1">Arcawinangun, Purwokerto</span>
                    <h3 class="text-xl font-serif font-bold">Tempat Temu & WFC Ternyaman</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Values Pillars -->
<section class="py-20 bg-[#120d0a] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-serif font-bold">Tiga Nilai Utama Kami</h2>
            <p class="text-gray-400 text-sm mt-2">Prinsip yang kami pegang dalam melayani setiap cangkir kopi dan setiap pelanggan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-[#1c1511] p-8 rounded-3xl border border-[#2e2119] text-center space-y-4">
                <div class="w-16 h-16 rounded-full bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center mx-auto text-2xl">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <h3 class="text-xl font-serif font-bold">100% Specialty Quality</h3>
                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                    Kami hanya menyajikan biji kopi bermutu tinggi yang telah melalui proses seleksi ketat dari petani nusantara.
                </p>
            </div>

            <div class="bg-[#1c1511] p-8 rounded-3xl border border-[#2e2119] text-center space-y-4">
                <div class="w-16 h-16 rounded-full bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center mx-auto text-2xl">
                    <i class="fa-solid fa-mug-saucer"></i>
                </div>
                <h3 class="text-xl font-serif font-bold">Hospitality & Kehangatan</h3>
                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                    Setiap senyuman barista dan staf kami bertujuan membuat Anda merasa seperti berada di ruang santai rumah sendiri.
                </p>
            </div>

            <div class="bg-[#1c1511] p-8 rounded-3xl border border-[#2e2119] text-center space-y-4">
                <div class="w-16 h-16 rounded-full bg-amberGold-500/10 text-amberGold-400 flex items-center justify-center mx-auto text-2xl">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3 class="text-xl font-serif font-bold">Komunitas Produktif</h3>
                <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                    Menyediakan sarana internet cepat, stopkontak melimpah, dan ruang nyaman untuk melahirkan ide-ide hebat di Purwokerto.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
