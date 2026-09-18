<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/detail', function () {
    return view('articles.detail');
});
