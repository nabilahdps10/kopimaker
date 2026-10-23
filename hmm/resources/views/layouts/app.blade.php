<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "El's Coffee Purwokerto - Specialty Coffee & Eatery")</title>
    <meta name="description" content="@yield('meta_description', 'Nikmati racikan kopi specialty nusantara, menu lezat, dan suasana kafe estetik untuk nugas dan WFC di El\'s Coffee Purwokerto, Jl. Prof. Dr. Suharso No.2.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            50: '#fbf8f5',
                            100: '#f6f0ea',
                            200: '#ece0d3',
                            300: '#dec7b2',
                            400: '#c8a487',
                            500: '#b88965',
                            600: '#a37151',
                            700: '#855941',
                            800: '#6d4937',
                            900: '#2c1e17',
                            950: '#150d09',
                        },
                        amberGold: {
                            400: '#e5b66d',
                            500: '#d49b42',
                            600: '#ba7f2f',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        serif: ['"Playfair Display"', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .gold-gradient-text {
            background: linear-gradient(135deg, #f6d396 0%, #d49b42 50%, #e8bc72 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .hero-pattern {
            background-color: #120d0a;
            background-image: radial-gradient(#2f2119 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-[#faf8f5] text-[#2c2420] font-sans antialiased selection:bg-amberGold-500 selection:text-white flex flex-col min-h-screen">

    <!-- Top Announcement Bar -->
    <div class="bg-[#1c1511] text-[#cbb8aa] text-xs sm:text-sm py-2 px-4 border-b border-[#2d221c]">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[11px] font-semibold bg-amberGold-500/20 text-amberGold-400 border border-amberGold-500/30">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span>
                    Purwokerto Branch Open
                </span>
                <span>Jl. Prof. Dr. Suharso No.2 (Dekat GOR Satria Purwokerto)</span>
            </div>
            <div class="flex items-center gap-4 text-xs">
                <span><i class="fa-regular fa-clock text-amberGold-400 mr-1"></i> Buka Setiap Hari: 10.00 - 22.00 WIB</span>
                <span class="hidden md:inline text-coffee-600">•</span>
                <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="hidden md:flex items-center text-amberGold-400 hover:text-amberGold-300 transition">
                    <i class="fa-solid fa-location-dot mr-1"></i> Buka Maps
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-[#120d0a]/95 backdrop-blur-md border-b border-[#2c2018] transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-11 h-11 rounded-full bg-gradient-to-br from-amberGold-400 to-coffee-700 flex items-center justify-center text-white shadow-lg shadow-amberGold-500/20 group-hover:scale-105 transition-transform duration-300">
                        <i class="fa-solid fa-mug-hot text-xl text-[#120d0a]"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-serif font-bold tracking-tight text-white group-hover:text-amberGold-400 transition-colors">
                            El's Coffee
                        </div>
                        <div class="text-[10px] tracking-[0.25em] uppercase text-amberGold-400 font-semibold">
                            Purwokerto
                        </div>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('home') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition">
                        Beranda
                    </a>
                    <a href="{{ route('menu') }}" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('menu') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition">
                        Daftar Menu
                    </a>
                    <a href="{{ route('location') }}" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('location') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition">
                        Lokasi & Peta
                    </a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('about') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition">
                        Tentang Kami
                    </a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('contact') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }} transition">
                        Kontak & Reservasi
                    </a>
                </nav>

                <!-- Action Button -->
                <div class="hidden sm:flex items-center gap-3">
                    <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto,%20saya%20mau%20tanya/order" target="_blank" class="inline-flex items-center justify-center px-4 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-[#120d0a] bg-gradient-to-r from-amberGold-400 to-amberGold-500 hover:from-amberGold-300 hover:to-amberGold-400 shadow-md shadow-amberGold-500/20 transition-all hover:scale-105">
                        <i class="fa-brands fa-whatsapp text-sm mr-2"></i> Chat Purwokerto
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobileMenuBtn" type="button" class="text-gray-300 hover:text-white p-2 rounded-lg hover:bg-white/5 focus:outline-none" aria-label="Toggle menu">
                        <i class="fa-solid fa-bars text-xl" id="menuIcon"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobileMenu" class="hidden md:hidden bg-[#18120e] border-b border-[#2d2119] px-4 pt-3 pb-5 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                <i class="fa-solid fa-house w-6 text-amberGold-400/80"></i> Beranda
            </a>
            <a href="{{ route('menu') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('menu') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                <i class="fa-solid fa-book-open w-6 text-amberGold-400/80"></i> Daftar Menu
            </a>
            <a href="{{ route('location') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('location') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                <i class="fa-solid fa-map-location-dot w-6 text-amberGold-400/80"></i> Lokasi Purwokerto
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                <i class="fa-solid fa-circle-info w-6 text-amberGold-400/80"></i> Tentang Kami
            </a>
            <a href="{{ route('contact') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium {{ request()->routeIs('contact') ? 'text-amberGold-400 bg-white/5' : 'text-gray-300 hover:text-white hover:bg-white/5' }}">
                <i class="fa-solid fa-envelope w-6 text-amberGold-400/80"></i> Kontak & Reservasi
            </a>
            <div class="pt-3 border-t border-gray-800">
                <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto" target="_blank" class="w-full flex items-center justify-center px-4 py-2.5 rounded-xl text-sm font-semibold text-[#120d0a] bg-amberGold-400 hover:bg-amberGold-300 transition">
                    <i class="fa-brands fa-whatsapp text-base mr-2"></i> Hubungi WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Floating WhatsApp Quick Button -->
    <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto,%20saya%20ingin%20tanya%20menu%20dan%20tempat" target="_blank" class="fixed bottom-6 right-6 z-40 bg-[#25D366] text-white p-4 rounded-full shadow-2xl hover:scale-110 transition-transform duration-300 flex items-center justify-center group" title="Chat WhatsApp Cabang Purwokerto">
        <i class="fa-brands fa-whatsapp text-2xl"></i>
        <span class="max-w-0 overflow-hidden whitespace-nowrap group-hover:max-w-xs group-hover:ml-2 text-sm font-semibold transition-all duration-300">
            Chat Purwokerto
        </span>
    </a>

    <!-- Footer -->
    <footer class="bg-[#120d0a] text-gray-300 pt-16 pb-12 border-t border-[#291e17]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <!-- Col 1: About & Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-amberGold-400 flex items-center justify-center text-[#120d0a] font-bold">
                            <i class="fa-solid fa-mug-hot"></i>
                        </div>
                        <div>
                            <span class="text-xl font-serif font-bold text-white block">El's Coffee</span>
                            <span class="text-[10px] tracking-widest uppercase text-amberGold-400 font-semibold">Cabang Purwokerto</span>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed mb-4">
                        Menghadirkan kenikmatan kopi specialty nusantara berkualitas prima dari roastery berpengalaman, dipadu hidangan lezat dan tempat yang sangat nyaman untuk santai maupun WFC di Purwokerto.
                    </p>
                    <div class="flex items-center space-x-3 text-lg">
                        <a href="https://instagram.com/elscoffee.purwokerto" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-amberGold-400 hover:text-[#120d0a] flex items-center justify-center transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-amberGold-400 hover:text-[#120d0a] flex items-center justify-center transition">
                            <i class="fa-solid fa-location-dot"></i>
                        </a>
                        <a href="https://wa.me/6281225809988" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-amberGold-400 hover:text-[#120d0a] flex items-center justify-center transition">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h3 class="text-white font-serif font-semibold text-lg mb-4 border-b border-[#2d2119] pb-2">
                        Navigasi Cepat
                    </h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-amberGold-400 transition flex items-center"><i class="fa-solid fa-angle-right text-xs text-amberGold-500 mr-2"></i> Beranda</a></li>
                        <li><a href="{{ route('menu') }}" class="hover:text-amberGold-400 transition flex items-center"><i class="fa-solid fa-angle-right text-xs text-amberGold-500 mr-2"></i> Menu Kopi & Makanan</a></li>
                        <li><a href="{{ route('location') }}" class="hover:text-amberGold-400 transition flex items-center"><i class="fa-solid fa-angle-right text-xs text-amberGold-500 mr-2"></i> Alamat & Peta Purwokerto</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-amberGold-400 transition flex items-center"><i class="fa-solid fa-angle-right text-xs text-amberGold-500 mr-2"></i> Cerita El's Coffee</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-amberGold-400 transition flex items-center"><i class="fa-solid fa-angle-right text-xs text-amberGold-500 mr-2"></i> Reservasi Meja</a></li>
                    </ul>
                </div>

                <!-- Col 3: Purwokerto Details -->
                <div>
                    <h3 class="text-white font-serif font-semibold text-lg mb-4 border-b border-[#2d2119] pb-2">
                        Cabang Purwokerto
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-start">
                            <i class="fa-solid fa-map-pin text-amberGold-400 mt-1 mr-3 flex-shrink-0"></i>
                            <span>Jl. Prof. Dr. Suharso No.2, Arcawinangun, Purwokerto Timur (Dekat GOR Satria)</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone text-amberGold-400 mr-3 flex-shrink-0"></i>
                            <span>0812-2580-9988</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-brands fa-instagram text-amberGold-400 mr-3 flex-shrink-0"></i>
                            <a href="https://instagram.com/elscoffee.purwokerto" target="_blank" class="hover:text-amberGold-400">@elscoffee.purwokerto</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope text-amberGold-400 mr-3 flex-shrink-0"></i>
                            <span>purwokerto@elscoffee.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Col 4: Opening Hours -->
                <div>
                    <h3 class="text-white font-serif font-semibold text-lg mb-4 border-b border-[#2d2119] pb-2">
                        Jam Operasional
                    </h3>
                    <div class="bg-[#1a130f] p-4 rounded-xl border border-[#2e221b] text-sm space-y-2">
                        <div class="flex justify-between items-center text-gray-200">
                            <span>Senin - Jumat</span>
                            <span class="font-semibold text-amberGold-400">10.00 - 22.00 WIB</span>
                        </div>
                        <div class="flex justify-between items-center text-gray-200">
                            <span>Sabtu - Minggu</span>
                            <span class="font-semibold text-amberGold-400">09.00 - 22.30 WIB</span>
                        </div>
                        <div class="pt-2 border-t border-gray-800 text-xs text-gray-400 flex items-center">
                            <i class="fa-solid fa-circle-check text-emerald-400 mr-1.5"></i>
                            Dine-In, Takeaway & Delivery Ready
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 border-t border-[#231a14] flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} El's Coffee Purwokerto. All Rights Reserved. Built with Laravel.</p>
                <div class="flex space-x-6">
                    <a href="{{ route('location') }}" class="hover:text-amberGold-400">Peta & Rute</a>
                    <a href="{{ route('menu') }}" class="hover:text-amberGold-400">Menu Rekomendasi</a>
                    <a href="https://maps.google.com/?q=Els+Koffie+Purwokerto" target="_blank" class="hover:text-amberGold-400">Ulasan Google</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Drawer JS -->
    <script>
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        const icon = document.getElementById('menuIcon');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) {
                icon.classList.remove('fa-xmark');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-xmark');
            }
        });
    </script>
</body>
</html>
