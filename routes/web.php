<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSiswaController;

Route::get('/', function () {
    $title = "Rafa Jaya Crane - Jasa Sewa Alat Berat &amp; Crane Profesional";
    $description = "Rafa Jaya Crane menyediakan layanan sewa alat berat seperti crane, excavator, forklift, dan trailer untuk kebutuhan proyek konstruksi dan industri di seluruh Indonesia. Solusi terbaik untuk rental alat berat terpercaya.";
    $keywords = "sewa alat berat, rental crane, sewa crane, sewa excavator, jasa ereksi girder, rafa jaya crane, sewa forklift, rental alat berat proyek, sewa truck lowbed, jasa konstruksi";
    $author = "Rafa Jaya Crane";
   return view('index', compact('title', 'description', 'keywords', 'author')); 
});
Route::get('/tentang', function () {
    $title = "Tentang Kami - Rafa Jaya Crane | Sewa Alat Berat & Crane Profesional";
    $description = "Pelajari lebih lanjut tentang Rafa Jaya Crane, penyedia jasa sewa alat berat dan crane terpercaya di Indonesia. Layanan lengkap, aman, dan profesional untuk kebutuhan proyek konstruksi dan industri.";
    $keywords = "tentang Rafa Jaya Crane, jasa sewa crane, sewa alat berat Indonesia, rental crane profesional, perusahaan alat berat, sewa excavator, jasa ereksi girder, alat berat proyek, sewa truk lowbed, profil perusahaan crane";
    $author = "Rafa Jaya Crane";
   return view('about', compact('title', 'description', 'keywords', 'author')); 
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::resource('data_siswa', DataSiswaController::class);
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_store'])->name('login_store');