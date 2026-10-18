<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    echo "<h1>Selamat Datang di Toko Buku Online</h1>";
});

// Halaman tentang
Route::get('/tentang', function () {
    echo "<h1>Tentang Kami</h1>";
    echo "<p>Toko Buku Online menjual berbagai buku.</p>";
});

// Daftar buku
Route::get('/buku', function () {
    echo "<h1>Daftar Buku</h1>";
});

// Route dengan parameter
Route::get('/buku/{id}', function ($id) {
    echo "<h1>Detail Buku</h1>";
    echo "ID Buku: " . $id;
})->where('id', '[0-9]+');

// Route group dengan prefix admin
Route::prefix('admin')->group(function () {
    Route::get('/kategori', function () {
        echo "<h1>Halaman Admin - Kategori</h1>";
    });

    Route::get('/kategori/{nama}', function ($nama) {
        echo "<h1>Kategori: " . $nama . "</h1>";
    });
});

// Halaman 404
Route::fallback(function () {
    echo "<h1>404 - Halaman tidak ditemukan</h1>";
});