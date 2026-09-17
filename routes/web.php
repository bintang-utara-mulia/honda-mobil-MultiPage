<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    try {
        return view('home');
    } catch (\Throwable $e) {
        return response(
            '<pre>' .
            $e->getMessage() .
            "\n\n" .
            $e->getFile() .
            ':' .
            $e->getLine() .
            "\n\n" .
            $e->getTraceAsString() .
            '</pre>',
            500
        );
    }
})->name('home');

Route::get('/mobil', function () {
    return view('mobil');
})->name('mobil');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');