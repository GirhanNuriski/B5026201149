<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PendapatanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pendapatan
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pendapatan ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }
    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        return view('pendapatan.tambah');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pendapatan')->insert([
            'pendapatan_ID' => $request->ID,
            'pendapatan_IDPegawai' => $request->IDPegawai,
            'pendapatan_bulan' => $request->Bulan,
            'pendapatan_tahun' => $request->Tahun,
            'pendapatan_gaji' => $request->Gaji,
            'pendapatan_tunjangan' => $request->Tunjangan
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pendapatan');

    }
}
