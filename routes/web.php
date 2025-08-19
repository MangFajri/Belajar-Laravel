<?php

use App\Http\Controllers\ProdukController;
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

// satu controller untuk banyak methodD
Route::get('/product',[ProdukController::class, 'index']);// read data menampilkan data produk

Route::get('/product/create',[ProdukController::class, 'create']);// menampiplkan halaman form data
Route::post('/product',[ProdukController::class, 'store']);// menyimpan data produk ke database
Route::get('/product/{id}',[ProdukController::class, 'show']);// menampilkan detail produk berdasarkan id

Route::get('/product/{id}/edit',[ProdukController::class, 'edit']);// menampilkan halaman form edit produk
Route::put('/product/{id}',[ProdukController::class, 'update']);// mengupdate data produk berdasarkan id