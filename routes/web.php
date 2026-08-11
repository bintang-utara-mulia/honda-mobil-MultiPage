<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('mobil');
});

// Halaman Mobil Honda
Route::get('/mobil', function () {
    return view('mobil');
});

// Halaman Motor Honda
Route::get('/motor', function () {
    return view('motor');
});