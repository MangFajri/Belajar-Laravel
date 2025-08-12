<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <!-- Membuat navbar dengan Bootstrap, warna utama biru dan mode gelap -->

  <div class="container">
    <!-- Membungkus isi navbar agar rapi di tengah halaman -->

    <a class="navbar-brand" href="#">Belajar Laravel 12</a>
    <!-- Logo atau judul aplikasi di kiri navbar -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Tombol hamburger untuk tampilan mobile, agar menu bisa di-expand -->

    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Bagian menu yang bisa collapse/expand di mobile -->

      <ul class="navbar-nav ms-auto">
        <!-- Daftar menu navigasi, 'ms-auto' agar menu di kanan -->

        <li class="nav-item">
          <a class="nav-link" href="/">Beranda</a>
          <!-- Link ke halaman utama -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Tentang Kami</a>
          <!-- Link ke halaman tentang -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Kontak</a>
          <!-- Link ke halaman kontak -->
        </li>     
        <li class="nav-item">
          <a class="nav-link" href="/product">Produk Kami</a>
          <!-- Link ke halaman produk -->
        </li>     
      </ul>
    </div>
  </div>
</nav>