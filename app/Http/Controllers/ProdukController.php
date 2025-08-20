<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use \Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
    // Fungsi untuk menampilkan halaman daftar produk
    public function index(Request $request)
    {
        $toko = [
           'nama_toko' => 'Toko Kink Reyhan',
           'alamat' => 'Isekai',
           'type' => 'Online'
        ];  

        $search = $request->keyword;

        // Mengirim data toko ke view 'pages.product'
        $produk = produk::when($search,function($query,$search){
            return $query->where('nama_produk','like',"%{$search}%");
            
        })->get();//query untuk mengambil semua data produk yang ada di tb_produk
        //$queryBuilder = DB::table('tb_produk')->get(); // Menggunakan query builder untuk mengambil data produk
        
        return view('pages.produk.show',[
            'data_toko' => $toko,
            'data_produk' => $produk
        ]);
    }

    // Fungsi untuk menampilkan halaman tambah produk
    public function create()
    {
        return view('pages.produk.add');
        // Menampilkan view 'addProduct' saat user mengakses
    }
    public function store(Request $request){
        //validasi
         // Melakukan validasi input sebelum data disimpan
    $request->validate([

        // Field nama_produk wajib diisi, minimal 8 karakter, maksimal 12 karakter
        'nama_produk' => 'required|min:8|max:12',

        // Field harga_produk wajib diisi dan harus berupa angka
        'harga_produk' => 'required|numeric',

        // Field deskripsi wajib diisi
        'deskripsi' => 'required'

    ],[
        // Pesan error custom untuk validasi nama_produk
        'nama_produk.min' => 'Nama produk minimal 8 karakter',
        'nama_produk.max' => 'Nama produk maksimal 12 karakter',
        'nama_produk.required' => 'Nama produk harus diisi',

        // Pesan error custom untuk validasi harga_produk
        'harga_produk.required' => 'Harga produk harus diisi',
        'harga_produk.numeric' => 'Harga produk harus berupa angka',

        // Pesan error custom untuk validasi deskripsi
        'deskripsi.required' => 'Deskripsi produk harus diisi'
    ]);
        
        // Menyimpan data produk ke database tb_produk
        // DB::table('tb-produk')->crate([]);
        //query tamnah data
        produk::create([
            'nama_produk' =>$request->nama_produk,
            'harga' => $request->harga_produk,
            'deskripsi_produk' => $request->deskripsi,
            'kategori_id' => '1'
        ]);

        // setelah data berhasil ditambahkan, akan mengarah ke halaman /product dan memberikan notif berhaasil ...
        return redirect('/product')->with('messege','berhasil menambahkan data');
    }

    public function show($id){
        // query atau perintah
        //elequent orm
        $data = produk::findOrFail($id);

        //query builder
        // $data = DB::table('tb_produk')->where('id_produk', $id)->firstOrFail();

        return view('pages.produk.detail', [
            'produk' => $data
        ]);
    }
    
    public function edit($id){
        // Mengambil data produk berdasarkan ID untuk ditampilkan di form edit
        $data = produk::findOrFail($id);
        
        return view('pages.produk.edit', [
            'data' => $data
        ]);
    }

    public function update($id,Request $request){
        $request->validate([
            'nama_produk' => 'required|min:8', // Nama produk harus diisi, minimal 8 karakter, maksimal 12 karakter
            'harga_produk' => 'required|numeric',
            'deskripsi' => 'required'
        ],[
            'nama_produk.min' => 'Nama produk minimal 8 karakter',
            'nama_produk.max' => 'Nama produk maksimal 12 karakter',
            'nama_produk.required' => 'Nama produk harus diisi',
            'harga_produk.required' => 'Harga produk harus diisi',
            'harga_produk.numeric' => 'Harga produk harus berupa angka',
            'deskripsi.required' => 'Deskripsi produk harus diisi'
        ]);

        // query update data
        produk::where('id_produk',$id)->update([
            'nama_produk' => $request->nama_produk, // Mengupdate nama produk
            'harga' => $request->harga_produk, // Mengupdate harga produk
            'deskripsi_produk' => $request->deskripsi    // Mengupdate deskripsi produk     
        ]);

        return redirect('product')->with('messege','berhasil mengupdate data'); // Mengarahkan kembali ke halaman produk dengan pesan sukses
    }

    public function destroy($id){
        // query untuk menghapus data produk berdasarkan ID
        produk::findOrFail($id)->delete();
        return redirect('/product')->with('messege', 'Berhasil menghapus data produk'); // Mengarahkan kembali ke halaman produk dengan pesan sukses
    }
}
