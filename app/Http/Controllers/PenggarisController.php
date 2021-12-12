<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function index()
    {
    	// mengambil data dari table penggaris
    	$penggaris = DB::table('penggaris')
        ->paginate(5);
    	// mengirim data penggaris ke view index
    	return view('penggaris.index',['penggaris' => $penggaris]);
    }
    public function cari(Request $request)
	{
		$cari = $request->cari;
		$penggaris = DB::table('penggaris')
		->where('merkpenggaris','like',"%".$cari."%")
		->paginate(5);
		return view('penggaris.index',['penggaris' => $penggaris]);
	}
    // method untuk menampilkan view form tambah penggaris
    public function tambah()
    {
	    // memanggil view tambah
	    return view('penggaris.tambah');
    }
    // method untuk insert data ke table penggaris
    public function store(Request $request)
    {
        // insert data ke table penggaris
        DB::table('penggaris')->insert([
            'merkpenggaris' => $request->merk,
            'stockpenggaris' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk edit data penggaris
    public function edit($id)
    {
        // mengambil data penggaris berdasarkan id yang dipilih
        $penggaris = DB::table('penggaris')->where('kodepenggaris',$id)->get();
        // passing data penggaris yang didapat ke view edit.blade.php
        return view('penggaris.edit',['penggaris' => $penggaris]);
    }
    // update data penggaris
    public function update(Request $request)
    {
        // update data penggaris
        DB::table('penggaris')->where('kodepenggaris',$request->id)->update([
            'merkpenggaris' => $request->merk,
            'stockpenggaris' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk hapus data penggaris
    public function hapus($id)
    {
        // menghapus data penggaris berdasarkan id yang dipilih
        DB::table('penggaris')->where('kodepenggaris',$id)->delete();
        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    public function view($id){
        $penggaris = DB::table('penggaris')->where('kodepenggaris',$id)->get();
        return view('penggaris.detail',['penggaris' => $penggaris]);
        }
}
