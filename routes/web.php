<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Espace protégé (Dashboard)
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () { return view('auth.login'); })->name('login');
Route::get('/register', function () { return view('auth.register'); })->name('register');


Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // La route qui renvoie les données JSON pour le JS
    Route::get('/admin/stats-data', [DashboardController::class, 'getStatsData'])->name('admin.stats.data');
});