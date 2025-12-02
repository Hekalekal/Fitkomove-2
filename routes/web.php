<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController; // <--- PASTIKAN INI DI-IMPORT

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Depan
Route::get('/', function () {
    return view('welcome');
});

// --- BAGIAN PENTING: TAMU (GUEST) ---
Route::middleware('guest')->group(function () {
    // 1. Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']); // Route POST Login

    // 2. Register (INI YANG HILANG SEBELUMNYA)
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']); // <--- TAMBAHKAN INI
});

// --- BAGIAN MEMBER (AUTH) ---
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Update Profile
    Route::put('/profile/update', [DashboardController::class, 'updateProfile'])->name('profile.update');
});