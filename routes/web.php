<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web; 

// Web Routes
Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// route baru
Route::get('/about', function () {
    // return view('welcome');
    return "<h2>Ini adalah laman About</h2>"; 
});

// route ke controller web ke fungsi home
Route::get('/web',[Web::class, 'home']); 

// route ke controller web ke fungsi profil
Route::get('/profil/{nama}',[Web::class, 'profil']); 

use App\Http\Controllers\DashboardController;

// Halaman Home
route::get('/home', [DashboardController::class, 'home']);

// Halaman Product
route::get('/product', [DashboardController::class, 'product']);

// Halaman Detail Produk dengan URL Parameter {harga}
route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

// Halaman About
route::get('/about', [DashboardController::class, 'about']);

//route ke controller Dashboard 
Route::get('/dashboard',[DashboardController::class, 'home']);

Route::get('/gallery',[DashboardController::class, 'gallery']);

// route untuk membuka view biodata
Route::get('/biodata',[Web::class, 'biodata']);

// import controller kalkulator
use App\Http\Controllers\KalkulatorController;

// route ke controller kalkulator
Route::get('/kalkulator', [KalkulatorController::class, 'home']);

// route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

use App\Http\Controllers\MahasiswaController;

// route untuk daftar mahasiswa 
function getMahasiswaRoute() {} // placeholder
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

use App\Http\Controllers\Kalkulator_SegitigaController;

// route untuk kalkulator segitiga
Route::get('/kalkulator/segitiga', [Kalkulator_SegitigaController::class, 'segitiga']);

