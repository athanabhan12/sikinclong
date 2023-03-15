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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pengguna', [App\Http\Controllers\UserController::class, 'index'])->name('pengguna');
Route::get('/outlet', [App\Http\Controllers\OutletController::class, 'index'])->name('outlet');
Route::get('/paket', [App\Http\Controllers\PaketController::class, 'index'])->name('paket');
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi');
Route::get('/laporan-pelanggan',[App\Http\Controllers\LaporanpelangganController::class, 'index'])->name('laporan-pelanggan');
Route::get('/laporan-transaksi',[App\Http\Controllers\LaporantransaksiController::class, 'index'])->name('laporan-transaksi');
Route::get('/laporan-outlet',[App\Http\Controllers\LaporanoutletController::class, 'index'])->name('laporan-outlet');

Route::get('/pelanggan/create',[App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan/store',[App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/hapus/{id}',[App\Http\Controllers\PelangganController::class, 'hapus']);
Route::get('/pelanggan/edit-pelanggan/{id}',[App\Http\Controllers\PelangganController::class, 'edit']);
Route::post('/pelanggan/update/{id}',[App\Http\Controllers\PelangganController::class, 'update']);
Route::get('/pelanggan/export',[App\Http\Controllers\PelangganController::class, 'export']);

Route::get('/pengguna/create',[App\Http\Controllers\UserController::class, 'create']);
Route::post('/pengguna/store',[App\Http\Controllers\UserController::class, 'store']);
Route::get('/pengguna/hapus/{id}',[App\Http\Controllers\UserController::class, 'hapus']);
Route::get('/pengguna/edit-pengguna/{id}',[App\Http\Controllers\UserController::class, 'edit']);
Route::post('/pengguna/update/{id}',[App\Http\Controllers\UserController::class, 'update']);

Route::get('/outlet/create',[App\Http\Controllers\OutletController::class, 'create']);
Route::post('/outlet/store',[App\Http\Controllers\OutletController::class, 'store']);
Route::get('/outlet/hapus/{id}',[App\Http\Controllers\OutletController::class, 'hapus']);
Route::get('/outlet/edit-outlet/{id}',[App\Http\Controllers\OutletController::class, 'edit']);
Route::post('/outlet/update/{id}',[App\Http\Controllers\OutletController::class, 'update']);
Route::get('/outlet/export',[App\Http\Controllers\OutletController::class, 'export']);

Route::get('/paket/create',[App\Http\Controllers\PaketController::class, 'create']);
Route::post('/paket/store',[App\Http\Controllers\PaketController::class, 'store']);
Route::get('/paket/hapus/{id}',[App\Http\Controllers\PaketController::class, 'hapus']);
Route::get('/paket/edit-paket/{id}',[App\Http\Controllers\PaketController::class, 'edit']);
Route::post('/paket/update/{id}',[App\Http\Controllers\PaketController::class, 'update']);

Route::get('/transaksi/create',[App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi/store',[App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/edit-status/{id}',[App\Http\Controllers\TransaksiController::class, 'edit']);
Route::post('/transaksi/update/{id}',[App\Http\Controllers\TransaksiController::class, 'update']);
Route::get('/transaksi/detail/{id}',[App\Http\Controllers\TransaksiController::class, 'detail']);
Route::get('/transaksi/export',[App\Http\Controllers\TransaksiController::class, 'export']);

