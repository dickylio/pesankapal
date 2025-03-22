<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FasilitasKapalController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananKapalController;
use App\Http\Controllers\RuteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/homebooking', function () {
    return view('homebooking');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/mybooking', function () {
    return view('mybooking');
});

// Rute untuk Fasilitas
Route::prefix('fasilitas')->group(function () {
    // Menampilkan daftar fasilitas
    Route::get('/', [FasilitasController::class, 'index'])->name('fasilitas.index');
    // Menyimpan fasilitas baru
    Route::post('/', [FasilitasController::class, 'store'])->name('fasilitas.store');
    // Menampilkan fasilitas berdasarkan ID
    Route::get('/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');
    // Mengupdate fasilitas berdasarkan ID
    Route::put('/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
    // Menghapus fasilitas berdasarkan ID
    Route::delete('/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
});

// Rute untuk Fasilitas Kapal
Route::prefix('fasilitaskapal')->group(function () {
    Route::get('/', [FasilitasKapalController::class, 'index'])->name('fasilitaskapal.index');
    Route::post('/', [FasilitasKapalController::class, 'store'])->name('fasilitaskapal.store');
    Route::get('/{id}', [FasilitasKapalController::class, 'show'])->name('fasilitaskapal.show');
    Route::put('/{id}', [FasilitasKapalController::class, 'update'])->name('fasilitaskapal.update');
    Route::delete('/{id}', [FasilitasKapalController::class, 'destroy'])->name('fasilitaskapal.destroy');
});

// Rute untuk Kapal
Route::prefix('kapal')->group(function () {
    Route::get('/', [KapalController::class, 'index'])->name('kapal.index');
    Route::post('/', [KapalController::class, 'store'])->name('kapal.store');
    Route::get('/{id}', [KapalController::class, 'show'])->name('kapal.show');
    Route::put('/{id}', [KapalController::class, 'update'])->name('kapal.update');
    Route::delete('/{id}', [KapalController::class, 'destroy'])->name('kapal.destroy');
});

// Rute untuk Pelanggan
Route::prefix('pelanggan')->group(function () {
    Route::get('/', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::post('/', [PelangganController::class, 'store'])->name('pelanggan.store');
    Route::get('/{id}', [PelangganController::class, 'show'])->name('pelanggan.show');
    Route::put('/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
    Route::delete('/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');
});

// Rute untuk Pemesanan Kapal
Route::prefix('pemesanankapal')->group(function () {
    Route::get('/', [PemesananKapalController::class, 'index'])->name('pemesanankapal.index');
    Route::post('/', [PemesananKapalController::class, 'store'])->name('pemesanankapal.store');
    Route::get('/{id}', [PemesananKapalController::class, 'show'])->name('pemesanankapal.show');
    Route::put('/{id}', [PemesananKapalController::class, 'update'])->name('pemesanankapal.update');
    Route::delete('/{id}', [PemesananKapalController::class, 'destroy'])->name('pemesanankapal.destroy');
});

// Rute untuk Rute
Route::prefix('rute')->group(function () {
    Route::get('/', [RuteController::class, 'index'])->name('rute.index');
    Route::post('/', [RuteController::class, 'store'])->name('rute.store');
    Route::get('/{id}', [RuteController::class, 'show'])->name('rute.show');
    Route::put('/{id}', [RuteController::class, 'update'])->name('rute.update');
    Route::delete('/{id}', [RuteController::class, 'destroy'])->name('rute.destroy');
});