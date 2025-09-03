<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PackageController as AdminPackageController; // Tambahkan alias ini
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PackageController; // Gunakan ini untuk controller publik
use Illuminate\Support\Facades\Route;

// Rute untuk Halaman Depan Publik
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Halaman Paket (Publik)
Route::get('/packages', PackageController::class)->name('packages.all');

Route::get('/b2b', function () {
    return view('b2b');
})->name('b2b');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Rute untuk Sistem Otentikasi (Login & Logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk Dashboard Admin (Dilindungi Autentikasi)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Rute resource untuk Paket Umrah
    Route::resource('packages', AdminPackageController::class)->names('admin.packages');
});