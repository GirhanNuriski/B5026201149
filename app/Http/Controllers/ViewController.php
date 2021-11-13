<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showETS()
    {
        return view('ets');
    }

    function showFilePHP()
    {
        return view('filephp');
    }

    function showIndexPHP(request $request)
    {
        return view('indexphp');
    }


}
