<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', function () {
    return view('movies.index');
});

Route::get('/genres', function () {
    return view('genres.list');
});

Route::get('/reviews', function () {
    return view('reviews.index');
});



