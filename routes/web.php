<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Example\Template;

use App\Http\Controllers\VO\Login;
use App\Http\Controllers\VO\Dashboard;
use App\Http\Middleware\EnsureMemberValid;
use App\Http\Middleware\EnsureAdminValid;

use App\Http\Controllers\Admin\Login as AdminLogin;
use App\Http\Controllers\Admin\Dashboard as AdminDashboard;
// Vo Routes
Route::get('/vo/login', [Login::class, 'show_login'])->name('login');
Route::post('/vo/auth/login', [Login::class, 'login']);

Route::get('/vo/auth/logout', function () {
    session()->forget('member');
    return redirect('/vo/login');
});

Route::group(['middleware' => [EnsureMemberValid::class]], function () {
    Route::any('/vo/dashboard/{method}', [Dashboard::class, 'dynamicMethod'])
        ->where('method', '.*');
});
// End Vo Routes


// Admin Routes
Route::get('/admin/login', [AdminLogin::class, 'show_login'])->name('login');
Route::post('/admin/auth/login', [AdminLogin::class, 'login']);

Route::get('/admin/auth/logout', function () {
    session()->forget('admin');
    return redirect('/admin/login');
});

Route::group(['middleware' => [EnsureAdminValid::class]], function () {
    Route::any('/admin/dashboard/{method}', [AdminDashboard::class, 'dynamicMethod'])
        ->where('method', '.*');
});

// End Admin Routes


// Template Routes
Route::any('/template/{method}', [Template::class, 'dynamicMethod'])
    ->where('method', '.*');
// End Template Routes