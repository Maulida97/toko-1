<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    function showBeranda()
    {
        return view('beranda');
    }

    function showProduk()
    {
        return view('produk');
    }
    function showPesanan()
    {
        return view('pesanan');
    }
    function showUser()
    {
        return view('user');
    }
}
