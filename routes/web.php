<?php

use Illuminate\Support\Facades\Route;

// Menampilkan halaman index.blade.php sebagai halaman utama
Route::get('/', function () {
    return view('index');
});

// Menampilkan halaman blog.blade.php
Route::get('/blog', function () {
    return view('blog');
});
