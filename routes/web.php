<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (beranda)
Route::get('/', function () {
    return view('pages.beranda');
    // Menampilkan view 'beranda' saat user mengakses URL '/'
});

// Route untuk halaman about (tentang kami)
Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Kink Reyhan',
        'umur' => 999,
        'alamat' => 'Isekai ',
        // Mengirim data 'nama', 'umur', dan 'alamat' ke view 'about'
    ]);
});

// Route untuk halaman contact (kontak)
Route::view('/contact', 'pages.contact');
// Menampilkan view 'contact' saat user mengakses URL '/contact'

// Route untuk halaman product (produk)
Route::view('/product', 'pages.product');
// Menampilkan view 'product' saat user mengakses URL '/product'
