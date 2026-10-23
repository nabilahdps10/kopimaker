<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    // Helpful fallback notice if vendor hasn't been installed yet
    header('Content-Type: text/html; charset=utf-8');
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>El's Coffee Purwokerto - Laravel Setup</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#120d0a] text-white flex items-center justify-center min-h-screen p-6 font-sans">
        <div class="max-w-xl bg-[#1c1511] p-8 rounded-3xl border border-[#3b2a20] shadow-2xl text-center space-y-4">
            <div class="w-16 h-16 rounded-full bg-amber-500/20 text-amber-400 flex items-center justify-center mx-auto text-3xl font-bold">
                ☕
            </div>
            <h1 class="text-2xl font-bold font-serif">Website El's Coffee Purwokerto</h1>
            <p class="text-sm text-gray-300">
                Struktur proyek <strong>Laravel</strong> telah berhasil dibuat secara lengkap!
            </p>
            <div class="bg-[#120d0a] p-4 rounded-xl text-left text-xs font-mono text-amber-300 border border-[#2d2018] space-y-2">
                <p class="text-gray-400"># Jalankan perintah ini di terminal untuk mengaktifkan Laravel:</p>
                <p>composer install</p>
                <p>php artisan serve</p>
            </div>
            <div class="pt-4">
                <p class="text-xs text-gray-400 mb-3">Ingin melihat tampilan website secara langsung sekarang?</p>
                <a href="./preview.html" class="inline-block px-6 py-3 rounded-full bg-amber-500 hover:bg-amber-400 text-black font-bold text-xs uppercase tracking-wider transition">
                    Buka Langsung Halaman Web (Preview HTML)
                </a>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
