<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HandleInertiaRequests;

use App\Http\Controllers\Public\Home;
use App\Http\Controllers\Public\Login;
use App\Http\Controllers\Public\Register;
use App\Http\Controllers\Public\Modeling;



Route::middleware(HandleInertiaRequests::class)->group(function () {
    Route::get('/login', [Login::class, 'show'])->name('login');
    Route::post('/login', [Login::class, 'login'])->withoutMiddleware('csrf');
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::get('/register', [Register::class, 'show'])->name('register');
    Route::post('/register', [Register::class, 'register'])->withoutMiddleware('csrf');

    // About
    Route::get('/about', [Home::class, 'show'])->name('about');

    // Modeling
    Route::get('/', [Modeling::class, 'show'])->name('home');
    Route::get('/modeling/my', [Modeling::class, 'MyModel'])->name('modeling.me');
    Route::get('/modeling/create', [Modeling::class, 'create'])->name('modeling.create');
    Route::get('/modeling/all/{my_model?}', [Modeling::class, 'showAllModel'])->name('modeling.all');
    Route::get('/modeling/detail/{unique_code}', [Modeling::class, 'detail'])->name('modeling.detail');
    Route::post('/modeling/save', [Modeling::class, 'saveCustomModel'])->withoutMiddleware('csrf');
    // update json
});
