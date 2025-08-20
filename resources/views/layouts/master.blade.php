<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Mengatur karakter encoding agar mendukung berbagai karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Membuat tampilan responsif di perangkat mobile -->
    <title>Bootstrap demo</title>
    <!-- Judul halaman -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!-- Memasukkan CSS Bootstrap dari CDN -->
  </head>
  <body>
    
    @include('layouts.navbar')
    <!-- Menampilkan navbar di semua halaman -->

    <div class="container mt-3">
     <!-- isi konten -->
      @yield('konten')
      <!-- Tempat konten utama halaman, diisi dari section 'konten' pada view -->
    </div>

    @include('layouts.footer')
    <!-- Menampilkan footer di semua halaman -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!-- Memasukkan JavaScript Bootstrap dari CDN -->
  </body>
</html>