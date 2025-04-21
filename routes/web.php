<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);

// Atau atur sebagai halaman utama
Route::get('/', function () {
    return redirect()->route('barang.index');
});
