<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    // inisiasi tabel produk
    protected $table = 'tb_produk';
    
    // inisiasi primary key di dalam tabel
    protected $primaryKey = 'id_produk';

    //inisi atribut yang dapat kita isi
    //protected $fillable = ['nama_produk', 'harga', 'stok'];

    // inisiasi atribut yang tidak dapat kita isi
    protected $guarded = ['id_product'];
}
