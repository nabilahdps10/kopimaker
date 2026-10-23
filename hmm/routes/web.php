<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes - El's Coffee Purwokerto
|--------------------------------------------------------------------------
*/

// Beranda (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Menu Lengkap (dengan filter kategori & pencarian)
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Halaman Informasi Cabang Purwokerto & Google Maps
Route::get('/lokasi', [LocationController::class, 'index'])->name('location');

// Halaman Cerita / Tentang El's Coffee
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');

// Halaman Kontak & Reservasi Meja
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/reservasi', [ContactController::class, 'submitReservation'])->name('reservation.submit');
