<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananKapalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignInController;


Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/signin', function () {
    return view('signin');})->name('signin');

Route::get('/create', function () {
    return view('create');})->name('create');

Route::get('/homebooking', function () {
    return view('homebooking');})->name('homebooking');

Route::get('/booking', function () {
    return view('booking');})->name('booking');

Route::get('/mybooking', function () {
    return view('mybooking');})->name('mybooking');


// Rute untuk Pemesanan Kapal
Route::prefix('pemesanankapal')->group(function () {
    Route::get('/', [PemesananKapalController::class, 'index'])->name('pemesanankapal.index');
    Route::post('/store', [PemesananKapalController::class, 'store'])->name('pemesanankapal.store');
    Route::get('/show', [PemesananKapalController::class, 'show'])->name('pemesanankapal.show');
    Route::put('/update', [PemesananKapalController::class, 'update'])->name('pemesanankapal.update');
    Route::delete('/destroy', [PemesananKapalController::class, 'destroy'])->name('pemesanankapal.destroy');
});

Route::prefix('users')->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
});

// Rute untuk Sign In
Route::get('/login', [SignInController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SignInController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [SignInController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('pelanggan')->group(function () {
    Route::get('/', [PelangganController::class, 'index'])->name('pelanggan');
    Route::get('/create', [PelangganController::class, 'create'])->name('pelanggan.create');
    Route::post('/store', [PelangganController::class, 'store'])->name('pelanggan.store');
});
