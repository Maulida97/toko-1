<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('produk', [HomeController::class, 'showProduk']);
Route::get('pesanan', [HomeController::class, 'showPesanan']);
Route::get('user', [HomeController::class, 'showUser']);
Route::get('login', [AuthController::class, 'showLogin']);


Route::get('toko', function () {
    return view('toko');
});
