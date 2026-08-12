<?php

use Illuminate\Support\Facades\Route;

// Halaman utama - Mobil Honda
Route::get('/', function () {
    return view('mobil');
});

// Halaman Mobil Honda
Route::get('/mobil', function () {
    return view('mobil');
});