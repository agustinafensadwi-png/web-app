<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Kalkulator_SegitigaController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Halaman utama mengarah ke form login
Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'cek']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route yang dilindungi middleware islogin
Route::middleware(['islogin'])->group(function () {
    Route::get('/home', [DashboardController::class, 'home']);
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);
    Route::get('/about', [DashboardController::class, 'about']);
    Route::get('/product', [DashboardController::class, 'product']);
    Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);

    // Route Employe
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);
});

// Route Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/edit/{admin}', [AdminController::class, 'show']);
Route::put('/admin/{admin}', [AdminController::class, 'update']);
Route::delete('/admin/{admin}', [AdminController::class, 'destroy']);

// Route tambahan / latihan lainnya
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/biodata', [Web::class, 'biodata']);
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [Kalkulator_SegitigaController::class, 'segitiga']);