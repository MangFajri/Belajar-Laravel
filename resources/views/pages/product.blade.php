@extends('layouts.master')
{{-- Meng-extend layout utama 'master' agar tampilan konsisten di seluruh halaman. --}}

@section('konten')
{{-- Mendefinisikan section 'konten' yang akan diisi pada layout master. --}}

    <h1>Daftar Product</h1>
    {{-- Judul halaman. --}}

    <hr>
    {{-- Garis horizontal sebagai pemisah. --}}

    <button type="button" class="btn btn-primary mb-3">Tambah Data</button>
    {{-- Tombol untuk menambah data produk baru. --}}

    <div class="card">
        <div class="card-header">
            Daftar Produk
            {{-- Header card, menampilkan judul daftar produk. --}}
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                {{-- Tabel untuk menampilkan data produk. --}}
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    {{-- Kolom nomor urut. --}}
                    <th scope="col">Nama Produk</th>
                    {{-- Kolom nama produk. --}}
                    <th scope="col">Stok</th>
                    {{-- Kolom jumlah stok. --}}
                    <th scope="col">Harga</th>
                    {{-- Kolom harga produk. --}}
                    <th scope="col">Aksi</th>
                    {{-- Kolom aksi (edit/hapus). --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>ROG</td>
                    <td>22</td>
                    <td>2000000000</td>
                    <td>
                        <button type="button" class="btn btn-danger">Hapus</button>
                        {{-- Tombol untuk menghapus produk. --}}
                        <button type="button" class="btn btn-warning">Edit</button>
                        {{-- Tombol untuk mengedit produk. --}}
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>ROG</td>
                    <td>22</td>
                    <td>2000000000</td>
                    <td>
                        <button type="button" class="btn btn-danger">Hapus</button>
                        <button type="button" class="btn btn-warning">Edit</button>
                    </td>
                    </tr>
                    {{-- Baris-baris data produk (saat ini masih statis). --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- Penutup section 'konten'. --}}