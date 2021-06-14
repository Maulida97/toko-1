<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('beranda', [AdminController::class, 'showBeranda']);
Route::get('produk', [AdminController::class, 'showProduk']);
Route::get('pesanan', [AdminController::class, 'showPesanan']);
Route::get('user', [AdminController::class, 'showUser']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('register', [AuthController::class, 'showRegister']);

Route::get('toko', [HomeController::class, 'showToko']);


Route::get('toko', function () {
    return view('toko');
});
