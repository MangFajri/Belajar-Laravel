@extends('layouts.master')
<!-- Menggunakan layout utama 'master' agar tampilan konsisten di seluruh halaman -->

@section('konten')
    <!-- Mendefinisikan section 'konten' yang akan diisi pada layout master -->
    <div class="card">
        <div class="card-header">tambah data produka</div>
        <div class="card-body">
            <form action="/product" method="POST">
                @csrf
                <!-- Menambahkan token CSRF untuk keamanan form -->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{ old('nama_produk') }}">
                            @error('nama_produk')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label class="form-label">Harga Produk</label>
                            <input type="number" name="harga_produk" class="form-control" value="{{ old('harga_produk') }}">
                            @error('harga_produk')
                                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi" placeholder="Leave a comment here" style="height: 100px"></textarea>
                                
                            <label>Deskrpsi Produk</label>
                        </div>
                        @error('deskripsi')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-sm-12 mt-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
<!-- Penutup section 'konten' -->