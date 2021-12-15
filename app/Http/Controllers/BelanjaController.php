<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index(){

        // mengambil data dari table keranjangbelanja
    	$keranjangbelanja = DB::table('keranjangbelanja')->paginate(5);

    	// mengirim data keranjangbelanja ke view index
    	return view('belanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }
    public function tambah()
    {
	    // memanggil view tambah
	    return view('belanja.tambah');
    }
    // method untuk insert data ke table belanja
    public function store(Request $request)
    {
        // insert data ke table belanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->kodebarang,
            'Jumlah' => $request->jumlah,
            'Harga' => $request->harga
        ]);
        // alihkan halaman ke halaman belanja
        return redirect('/belanja');
    }
    // method untuk hapus data belanja
    public function hapus($id)
    {
        // menghapus data belanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('KodeBarang',$id)->delete();
        // alihkan halaman ke halaman belanja
        return redirect('/belanja');
    }
}
