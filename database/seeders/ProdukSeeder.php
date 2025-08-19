<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query untuk menambah data produk
        DB::table('tb_produk')->insert([
            [
                'nama_produk' =>'Smart TV Samsung 30 Inch',
                'harga' =>'17000000',
                'deskripsi_produk' =>'ini adalah sebuah deskripsi',
                'kategori_id' =>'2',
                'created_at' => now()
            ],[
            
                'nama_produk' =>'Kulkas Samsung 2 Pintu',
                'harga' =>'7000000',
                'deskripsi_produk' =>'ini adalah sebuah deskripsi',
                'kategori_id' =>'1',
                'created_at' => now()
            ],[
            
                'nama_produk' =>'Laptop Asus ROG',
                'harga' =>'20000000',
                'deskripsi_produk' =>'ini adalah sebuah deskripsi',
                'kategori_id' =>'3',
                'created_at' => now()
            ]    
        ]);
    
    }
}
