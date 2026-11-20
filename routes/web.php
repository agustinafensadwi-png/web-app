<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Kalkulator_SegitigaController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\AuthController; 

// Web Routes
Route::get('/', function () {
    return "Hallo namaku adalah Laravel, Salam Kenal";
});

// Route baru
Route::get('/about', function () {
    // return view('welcome');
    return "<h2>Ini adalah laman About</h2>";
});

// Route ke controller web ke fungsi home
Route::get('/web', [Web::class, 'home']);

// Route ke controller web ke fungsi profil
Route::get('/profil/{nama}', [Web::class, 'profil']);

// Halaman Home
Route::get('/home', [DashboardController::class, 'home']);

// Halaman Product
Route::get('/product', [DashboardController::class, 'product']);

// Halaman Detail Produk dengan URL Parameter {harga}
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

// Halaman About (DashboardController)
Route::get('/about', [DashboardController::class, 'about']);

// Route ke controller Dashboard
Route::get('/dashboard', [DashboardController::class, 'home']);

Route::get('/gallery', [DashboardController::class, 'gallery']);

// Route untuk membuka view biodata
Route::get('/biodata', [Web::class, 'biodata']);

// Route ke controller kalkulator
Route::get('/kalkulator', [KalkulatorController::class, 'home']);

// Route untuk proses perhitungan
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// Route untuk daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// Route untuk kalkulator segitiga
Route::get('/kalkulator/segitiga', [Kalkulator_SegitigaController::class, 'segitiga']);

// Route Employe
Route::get('/employe', [EmployeController::class, 'index']);
Route::get('/employe/create', [EmployeController::class, 'create']);
Route::post('/employe/store', [EmployeController::class, 'store']);
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
Route::put('/employe/{employe}', [EmployeController::class, 'update']);
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']); 

Route::resource('employe',EmployeController::class);

// Route Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/edit/{admin}', [AdminController::class, 'show']);
Route::put('/admin/{admin}', [AdminController::class, 'update']);
Route::delete('/admin/{admin}', [AdminController::class, 'destroy']);

//agar langsung masuk login 
Route::get('/', function(){ 
    return view('login'); 
});
Route::post('/login',[AuthController::class, 'cek']);