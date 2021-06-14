<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    function showToko()
    {
        return view('toko');
    }

    function showBarang1()
    {
        return view('barang1');
    }
}
