<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
 
    Route::get('/', function () {
    return view('welcome', ['version' => '1.0']);
});

Route::get('/about', function () {
    return 'À propos';
});
});
Route::get('/login', [AuthController::class, 'showLoginForm']);
