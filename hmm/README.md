# Website Resmi El's Coffee Purwokerto ☕

Website modern, estetik, dan responsif untuk **El's Coffee (Els Koffie) Cabang Purwokerto**, dibangun menggunakan framework **PHP Laravel**.

---

## 📍 Informasi Cabang Purwokerto
* **Alamat Lengkap:** Jl. Prof. Dr. Suharso No.2, RT.04/RW.02, Kelurahan Arcawinangun, Kecamatan Purwokerto Timur, Kabupaten Banyumas, Jawa Tengah 53113
* **Patokan Lokasi:** Tepat di seberang *Reta Beauty Clinic* (sekitar 200 meter sebelah timur kawasan GOR Satria Purwokerto).
* **Jam Buka:**
  * Senin – Jumat: 10.00 – 22.00 WIB
  * Sabtu – Minggu: 09.00 – 22.30 WIB
* **Google Maps:** [https://maps.google.com/?q=Els+Koffie+Purwokerto](https://maps.google.com/?q=Els+Koffie+Purwokerto)
* **WhatsApp Order & Reservasi:** 0812-2580-9988
* **Instagram:** [@elscoffee.purwokerto](https://instagram.com/elscoffee.purwokerto)

---

## 🌟 Fitur Utama Website
1. **Beranda Interaktif (Home):**
   - Hero banner dengan nuansa luxury warm espresso & gold accent.
   - Cerita singkat dedikasi biji specialty nusantara El's Coffee.
   - Fasilitas kafe Purwokerto (WFC Ready, stopkontak di tiap meja, WiFi kencang 100 Mbps, indoor AC, outdoor garden, mushola bersih, parkir luas).
   - Review asli Google Local Guides Purwokerto (rating 4.8 bintang).
2. **Daftar Menu & Kisaran Harga (Menu):**
   - **Specialty Coffee:** Americano, Caffè Latte, Cappuccino, Manual Brew V60 Nusantara (Gayo, Mandheling, Toraja, Flores, Wamena), Avocado Coffee Float, Caramel Macchiato.
   - **Signature Drinks:** Choco Mint Coffee, Choco Salted Caramel, Es Kopi Susu Gula Aren Els.
   - **Non-Coffee & Tea:** Signature Dark Chocolate Lampung, Artisan Matcha Latte, Lychee Iced Tea, Berry Lemonade Fizz.
   - **Rice Bowl & Asian Mains:** Saikoro Beef Rice Bowl (Blackpepper/BBQ), Els Omurice Butter Rice, Nasi Curry Chicken Katsu, Ayam Kecombrang, Nasi Goreng Spesial Saikoro.
   - **Pasta:** Creamy Carbonara, Spaghetti Aglio Olio Smoked Beef, Bolognese.
   - **Snacks & Desserts:** Els Sharing Platter, Churros with Belgian Chocolate, Choco Banana Fritter, Els Curly Corn.
   - Filter Kategori instan & Live Search bar.
   - Tombol langsung order via WhatsApp dengan format otomatis.
3. **Peta & Rute Lokasi (Location):**
   - Alamat detail dan tombol "Salin Alamat".
   - Peta interaktif Google Maps embed.
   - Estimasi waktu tempuh dari UNSOED, GOR Satria, Alun-Alun, dan Stasiun Purwokerto.
4. **Galeri Foto Suasana & Google Photos:**
   - Foto interior kafe, outdoor sejuk, barista bar, latte art, dan hidangan makanan.
5. **Formulir Reservasi Meja (Contact):**
   - Form booking meja dan ruang rapat yang langsung terintegrasi dengan pesan WhatsApp.

---

## 🚀 Cara Menjalankan Website

### Opsi 1: Buka Langsung (Tanpa Install PHP / Composer)
Karena file preview mandiri sudah disediakan, Anda dapat langsung mengklik dua kali file:
* **`index.html`** atau **`public/preview.html`**
Website akan langsung terbuka di browser (Google Chrome, Safari, atau Firefox) dengan seluruh fitur interaktif dan tampilan yang sama persis!

---

### Opsi 2: Menjalankan via Server Laravel (PHP)
Jika di komputer Anda sudah terpasang PHP dan Composer:

1. Buka Terminal pada folder proyek ini:
   ```bash
   cd /Users/nabilahdps/Downloads/hmm
   ```

2. Unduh dependencies Laravel:
   ```bash
   composer install
   ```

3. Jalankan development server Laravel:
   ```bash
   php artisan serve
   ```

4. Buka browser dan akses:
   ```
   http://localhost:8000
   ```

---

## 📁 Struktur Direktori Laravel
```
hmm/
├── app/
│   ├── Http/Controllers/
│   │   ├── HomeController.php      # Controller Halaman Utama & About
│   │   ├── MenuController.php      # Controller Filter Menu & Search
│   │   ├── LocationController.php  # Controller Lokasi Purwokerto & Maps
│   │   └── ContactController.php   # Controller Kontak & Reservasi
│   └── Models/
│       ├── Category.php            # Model Kategori Menu
│       └── Menu.php                # Model Data Menu
├── config/
│   ├── purwokerto.php              # Detail Alamat, Jam Buka, Fasilitas, Galeri & Review
│   └── menu.php                    # Data Lengkap Menu, Kategori, Harga & Foto
├── database/
│   ├── migrations/                 # Migrasi Database SQLite / MySQL
│   └── seeders/                    # Seeder Menu & Kategori
├── public/
│   ├── index.php                   # Entry Point Laravel Web
│   └── preview.html                # Standalone HTML Preview
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php           # Master Blade Layout (Tailwind, FontAwesome)
│   └── pages/
│       ├── home.blade.php          # View Beranda Utama
│       ├── menu.blade.php          # View Halaman Menu Lengkap
│       ├── location.blade.php      # View Halaman Lokasi Purwokerto
│       ├── about.blade.php         # View Tentang El's Coffee
│       └── contact.blade.php       # View Form Kontak & Reservasi
├── routes/
│   └── web.php                     # Route Definition Laravel
├── index.html                      # Shortcut Langsung Browser
└── README.md                       # Dokumentasi Proyek
```
