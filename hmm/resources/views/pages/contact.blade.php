@extends('layouts.app')

@section('title', "Kontak & Reservasi Meja - El's Coffee Purwokerto")
@section('meta_description', "Form reservasi meja, meeting room, dan kontak WhatsApp cabang El's Coffee Purwokerto di Jl. Prof. Dr. Suharso No.2.")

@section('content')
<!-- Header Banner -->
<section class="bg-[#120d0a] text-white py-14 border-b border-[#291e17] hero-pattern relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <span class="text-xs font-bold uppercase tracking-widest text-amberGold-400 bg-amberGold-500/10 border border-amberGold-500/20 px-3 py-1 rounded-full">
            Get in Touch
        </span>
        <h1 class="text-3xl sm:text-5xl font-serif font-bold mt-4 mb-3">
            Kontak & Reservasi Meja
        </h1>
        <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto font-light">
            Rencanakan kunjungan Anda bersama teman, rekan kerja, maupun keluarga di El's Coffee Purwokerto.
        </p>
    </div>
</section>

<!-- Content Grid -->
<section class="py-16 bg-[#faf8f5]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            
            <!-- Left: Reservation Form -->
            <div class="lg:col-span-7 bg-white p-8 sm:p-10 rounded-3xl border border-gray-100 shadow-md">
                <div class="mb-8">
                    <span class="text-xs font-bold text-coffee-600 uppercase tracking-wider block">Formulir Booking</span>
                    <h2 class="text-2xl font-serif font-bold text-gray-900 mt-1">
                        Reservasi Meja & Ruang Pertemuan
                    </h2>
                    <p class="text-gray-500 text-xs sm:text-sm mt-1">
                        Isi form di bawah ini dan konfirmasi reservasi akan langsung terhubung ke WhatsApp resmi kami.
                    </p>
                </div>

                <form action="{{ route('reservation.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                name="name" 
                                required 
                                placeholder="Contoh: Dimas Prasetyo" 
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                            >
                        </div>

                        <!-- No WhatsApp -->
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                No. WhatsApp / HP <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="tel" 
                                name="phone" 
                                required 
                                placeholder="0812xxxxxxxx" 
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <!-- Tanggal -->
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                Tanggal <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="date" 
                                name="date" 
                                required 
                                value="{{ date('Y-m-d') }}"
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                            >
                        </div>

                        <!-- Jam Kedatangan -->
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                Jam Datang <span class="text-red-500">*</span>
                            </label>
                            <select 
                                name="time" 
                                required 
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                            >
                                <option value="10:00">10:00 WIB</option>
                                <option value="11:00">11:00 WIB</option>
                                <option value="12:00">12:00 WIB</option>
                                <option value="13:00">13:00 WIB</option>
                                <option value="14:00">14:00 WIB</option>
                                <option value="15:00">15:00 WIB</option>
                                <option value="16:00">16:00 WIB</option>
                                <option value="17:00">17:00 WIB</option>
                                <option value="18:30">18:30 WIB</option>
                                <option value="19:00" selected>19:00 WIB</option>
                                <option value="20:00">20:00 WIB</option>
                            </select>
                        </div>

                        <!-- Jumlah Tamu -->
                        <div>
                            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                                Jumlah Orang <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                name="guests" 
                                min="1" 
                                max="50" 
                                value="2" 
                                required 
                                class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                            >
                        </div>
                    </div>

                    <!-- Catatan Tambahan -->
                    <div>
                        <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">
                            Catatan Khusus (Opsional)
                        </label>
                        <textarea 
                            name="notes" 
                            rows="3" 
                            placeholder="Contoh: Meja dekat colokan untuk kerja, butuh kursi bayi, perayaan ulang tahun..." 
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 text-sm focus:border-amberGold-500 focus:bg-white focus:outline-none transition"
                        ></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-4 rounded-2xl bg-gradient-to-r from-amberGold-400 to-amberGold-500 hover:from-amberGold-300 hover:to-amberGold-400 text-[#120d0a] font-bold text-sm uppercase tracking-wider shadow-lg shadow-amberGold-500/20 transition hover:scale-[1.01] flex items-center justify-center gap-2"
                    >
                        <i class="fa-brands fa-whatsapp text-lg text-[#120d0a]"></i>
                        Kirim Reservasi ke WhatsApp Cabang Purwokerto
                    </button>
                    <p class="text-[11px] text-gray-400 text-center">
                        * Tanpa biaya booking fee untuk reservasi reguler.
                    </p>
                </form>
            </div>

            <!-- Right: Contact Information Cards -->
            <div class="lg:col-span-5 space-y-6">
                <!-- Direct WhatsApp Contact Box -->
                <div class="bg-gradient-to-br from-emerald-600 to-emerald-700 text-white p-7 rounded-3xl shadow-lg relative overflow-hidden">
                    <div class="relative z-10 space-y-3">
                        <div class="w-12 h-12 rounded-2xl bg-white/20 backdrop-blur-sm flex items-center justify-center text-2xl">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <h3 class="text-xl font-serif font-bold">Fast Response via WhatsApp</h3>
                        <p class="text-emerald-100 text-xs sm:text-sm leading-relaxed">
                            Butuh informasi menu segera, catering kopi, pesanan dalam jumlah banyak, atau reservasi cepat?
                        </p>
                        <div class="pt-2">
                            <a href="https://wa.me/6281225809988?text=Halo%20El's%20Coffee%20Purwokerto" target="_blank" class="inline-flex items-center px-6 py-3 rounded-xl bg-white text-emerald-800 font-bold text-xs uppercase tracking-wider hover:bg-emerald-50 transition shadow-md">
                                Chat WhatsApp Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Info summary -->
                <div class="bg-white p-7 rounded-3xl border border-gray-100 shadow-md space-y-4">
                    <h3 class="font-serif font-bold text-gray-900 text-lg">Informasi Kontak Cabang</h3>
                    
                    <ul class="space-y-4 text-sm text-gray-600">
                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 block">Alamat</span>
                                <span class="text-xs leading-relaxed text-gray-600 block mt-0.5">
                                    Jl. Prof. Dr. Suharso No.2, Arcawinangun, Purwokerto Timur (Dekat GOR Satria)
                                </span>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 block">Telepon / WhatsApp</span>
                                <span class="text-xs text-gray-600 block mt-0.5">0812-2580-9988</span>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 block">Instagram</span>
                                <a href="https://instagram.com/elscoffee.purwokerto" target="_blank" class="text-xs text-amberGold-600 hover:underline block mt-0.5">
                                    @elscoffee.purwokerto
                                </a>
                            </div>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="w-9 h-9 rounded-xl bg-coffee-100 text-coffee-800 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i class="fa-regular fa-clock"></i>
                            </div>
                            <div>
                                <span class="font-bold text-gray-900 block">Jam Operasional</span>
                                <span class="text-xs text-gray-600 block mt-0.5">Buka Setiap Hari: 10.00 – 22.00 WIB</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
