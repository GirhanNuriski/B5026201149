<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pendapatan
    	$pendapatan = DB::table('pendapatan')->get();

    	// mengirim data pendapatan ke view index
    	return view('pendapatan.index',['pendapatan' => $pendapatan]);

    }
}
