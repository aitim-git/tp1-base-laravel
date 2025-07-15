<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['version' => '1.0']);
});

Route::get('/about', function () {
    return 'À propos';
});
