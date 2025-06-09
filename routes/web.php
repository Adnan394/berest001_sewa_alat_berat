<?php

use App\Models\Meta;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    $title = "Rafa Jaya Crane - Jasa Sewa Alat Berat &amp; Crane Profesional";
    $description = "Rafa Jaya Crane menyediakan layanan sewa alat berat seperti crane, excavator, forklift, dan trailer untuk kebutuhan proyek konstruksi dan industri di seluruh Indonesia. Solusi terbaik untuk rental alat berat terpercaya.";
    $keywords = "sewa alat berat, rental crane, sewa crane, sewa excavator, jasa ereksi girder, rafa jaya crane, sewa forklift, rental alat berat proyek, sewa truck lowbed, jasa konstruksi";
    $author = "Rafa Jaya Crane";
    $portofolio = Portofolio::all();
    $services = Service::all();
    $produk = Produk::all();
    $gallery = Gallery::all();
    $berita = Berita::all();
   return view('index', compact('title', 'description', 'keywords', 'author', 'portofolio', 'services', 'produk', 'gallery', 'berita')); 
});
Route::get('/tentang', function () {
    $title = "Tentang Kami - Rafa Jaya Crane | Sewa Alat Berat & Crane Profesional";
    $description = "Pelajari lebih lanjut tentang Rafa Jaya Crane, penyedia jasa sewa alat berat dan crane terpercaya di Indonesia. Layanan lengkap, aman, dan profesional untuk kebutuhan proyek konstruksi dan industri.";
    $keywords = "tentang Rafa Jaya Crane, jasa sewa crane, sewa alat berat Indonesia, rental crane profesional, perusahaan alat berat, sewa excavator, jasa ereksi girder, alat berat proyek, sewa truk lowbed, profil perusahaan crane";
    $author = "Rafa Jaya Crane";
   return view('about', compact('title', 'description', 'keywords', 'author')); 
});

Route::get("berita", function() {
    $data = Berita::paginate(10);
    $headline = Berita::inRandomOrder()->first();
    $meta = Meta::where('id', $headline->id_meta)->first();
    return view("berita", [
        'active' => 'berita',
        'title' => $meta->title,
        'description' => $meta->description,
        'keywords' => $meta->keywords,
        'author' => $meta->author,
        'data' => $data,
        'headline' => $headline,
    ]);
});

Route::get("service/{slug}", function($slug) {
    $data = Service::where('slug', $slug)->first();
    $meta = Meta::where('id', $data->id_meta)->first();
    
    return view("service_detail", [
        'active' => 'service',
        'title' => $meta->title,
        'description' => $meta->description,
        'keywords' => $meta->keywords,
        'author' => $meta->author,
        'data' => $data
    ]);
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'active' => 'dashboard',
        ]);
    });

    Route::resource('service', ServiceController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::resource('gallery', GalleryController::class);
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_store'])->name('login_store');