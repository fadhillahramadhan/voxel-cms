<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HandleInertiaRequests;

use App\Http\Controllers\Public\Home;
use App\Http\Controllers\Public\Login;
use App\Http\Controllers\Public\Register;



Route::middleware(HandleInertiaRequests::class)->group(function () {
    Route::get('/', [Home::class, 'show'])->name('home');
    Route::get('/login', [Login::class, 'show'])->name('login');
    Route::post('/login', [Login::class, 'login'])->withoutMiddleware('csrf');
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::get('/register', [Register::class, 'show'])->name('register');
    Route::post('/register', [Register::class, 'register'])->withoutMiddleware('csrf');
});
