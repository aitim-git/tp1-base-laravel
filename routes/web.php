<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['version' => '1.0']);
});
