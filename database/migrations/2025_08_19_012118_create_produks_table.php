<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //sintak dibawah membuat tabel 'produks'
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');//deafulynya laravel 'id'
            $table->string('nama_produk',150); // nama produk, default panjang 255 karakter
            $table->integer('harga'); // harga produk
            $table->text('deskripsi_produk'); // deskripsi produk, nullable jika tidak ada
            $table->integer('kategori_id'); // kategori produk
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
