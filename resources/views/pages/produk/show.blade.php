@extends('layouts.master')
{{-- Meng-extend layout utama 'master' agar tampilan konsisten di seluruh halaman. --}}

@section('konten')
{{-- Mendefinisikan section 'konten' yang akan diisi pada layout master. --}}

    <h1>Daftar Product</h1>
    {{-- Judul halaman. --}}

    <hr>
    {{-- Garis horizontal sebagai pemisah. --}}

    <a href="/product/create" type="button" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- Tombol untuk menambah data produk baru, mengarah ke halaman tambah produk. --}}

    <div class="alert alert-primary">
        <b>Nama Toko :</b> {{ $data_toko['nama_toko'] }}
        <br>
        <b>Alamat :</b> {{ $data_toko['alamat'] }}
        <br>
        <b>Tipe Toko :</b> {{ $data_toko['type'] }}
    </div>
    {{-- Menampilkan informasi toko yang dikirim dari controller. --}}
    @if (session('messege'))
         <div class="alert alert-primary">{{ session('messege') }}</div>
    @endif
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
                    <th scope="col">Harga</th>
                    {{-- Kolom jumlah stok. --}}
                    <th scope="col">Deskripsi</th>
                    {{-- Kolom harga produk. --}}
                    <th scope="col">Aksi</th>
                    {{-- Kolom aksi (edit/hapus). --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_produk as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->deskripsi_produk}}</td>
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button>
                            {{-- Tombol untuk menghapus produk. --}}
                            <a href="/product/{{ $item->id_produk }}/edit" type="button" class="btn btn-warning">Edit</button>
                            {{-- Tombol untuk mengedit produk. --}}
                            <a href="/product/{{ $item->id_produk }}" type="button" class="btn btn-info">Detail</a>
                            {{-- Tombol untuk Melihat Detail produk. --}}
                        </td>
                        </tr>
                    @endforeach
                    
                    
                    {{-- Baris-baris data produk (saat ini masih statis). --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
{{-- Penutup section 'konten'. --}}