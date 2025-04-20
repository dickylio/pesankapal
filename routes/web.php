<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pelanggan\PelangganController;
use App\Http\Controllers\PemesananKapalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\KapalController;

Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/signin', function () {
    return view('signin');})->name('signin');

Route::get('/create', function () {
    return view('create');})->name('create');

Route::get('/homebooking', [KapalController::class, 'index'])->name('homebooking');

Route::get('/booking', function () {
    return view('booking');})->name('booking');

Route::get('/mybooking', function () {
    return view('mybooking');})->name('mybooking');


// Rute untuk Pelanggan
Route::prefix('pelanggan')->group(function () {
    Route::get('/', [PelangganController::class, 'index'])->name('pelanggan.index'); // Menampilkan daftar pelanggan
    Route::get('/create', [PelangganController::class, 'create'])->name('pelanggan.create'); // Menampilkan form untuk membuat pelanggan baru
    Route::post('/store', [PelangganController::class, 'store'])->name('pelanggan.store'); // Menyimpan pelanggan baru
    Route::get('/show', [PelangganController::class, 'show'])->name('pelanggan.show'); // Menampilkan pelanggan berdasarkan ID
    Route::put('/update', [PelangganController::class, 'update'])->name('pelanggan.update'); // Mengupdate pelanggan berdasarkan ID
    Route::delete('/destroy', [PelangganController::class, 'destroy'])->name('pelanggan.destroy'); // Menghapus pelanggan berdasarkan ID
});

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
