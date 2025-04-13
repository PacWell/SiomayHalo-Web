<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('components.content.dashboard');
// });
Route::get('/produk', function () {
    return view('components.content.produk');
});
Route::get('/laporan', function () {
    return view('components.content.laporan');
});


Route::get('/', [DashboardController::class, 'index']);
Route::resource('produk', ProdukController::class);
Route::get('/laporan', [LaporanController::class, 'index']);
