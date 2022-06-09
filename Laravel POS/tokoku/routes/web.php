<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index']);
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index']);
Route::get('/member', [App\Http\Controllers\MemberController::class, 'index']);
Route::get('/pembelian', [App\Http\Controllers\PembelianController::class, 'index']);
Route::get('/pembeliandetail', [App\Http\Controllers\PembelianDetailController::class, 'index']);
Route::get('/pengeluaran', [App\Http\Controllers\PengeluaranController::class, 'index']);
Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class, 'index']);
Route::get('/penjualandetail', [App\Http\Controllers\PenjualanDetailController::class, 'index']);
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index']);
Route::get('/setting', [App\Http\Controllers\SettingController::class, 'index']);
Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index']);
Route::get('/transaksilama', [App\Http\Controllers\TransaksiLamaController::class, 'index']);
Route::get('/transaksibaru', [App\Http\Controllers\TransaksiBaruController::class, 'index']);
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);