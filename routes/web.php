<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);

// Atau atur sebagai halaman utama
Route::get('/', function () {
    return redirect()->route('barang.index');
});
Route::get('/Bioskop/blog', function () {
    return view('Bioskop.blog');
});


Route::get('/Bioskop/File1', function () {
    return view('Bioskop.File1');
});

Route::get('/Bioskop/File2', function () {
    return view('Bioskop.File2');
});

Route::get('/Bioskop/File3', function () {
    return view('Bioskop.File3');
});