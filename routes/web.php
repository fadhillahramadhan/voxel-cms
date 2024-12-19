<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Example\Template;

use App\Http\Controllers\VO\Login;
use App\Http\Controllers\VO\Dashboard;
use App\Http\Middleware\EnsureMemberValid;
use App\Http\Middleware\EnsureAdminValid;

use App\Http\Controllers\Admin\Login as AdminLogin;
use App\Http\Controllers\Admin\Dashboard as AdminDashboard;
use App\Http\Controllers\VO\Registration;
// handle inertia requests\
use App\Http\Middleware\HandleInertiaRequests;
use GuzzleHttp\Psr7\Request;

// Vo Routes

// middleware for inertia requests

// FORWARD / INTO ADMIN
Route::get('/', function () {
    return redirect('/admin/login');
});

Route::middleware([HandleInertiaRequests::class])->group(function () {
    Route::get('/vo/login', [Login::class, 'show_login']);
    Route::post('/vo/login', [Login::class, 'login']);
});


Route::any('/vo/logout', function () {
    session()->forget('member');

    return redirect('/vo/login');
});

Route::group(['middleware' => [EnsureMemberValid::class]], function () {
    Route::any('/vo/dashboard/{method}', [Dashboard::class, 'dynamicMethod'])
        ->where('method', '.*');

    Route::any('/vo/registration/{method}', [Registration::class, 'dynamicMethod'])
        ->where('method', '.*');
});
// End Vo Routes


// Admin Routes
Route::get('/admin/login', [AdminLogin::class, 'show_login'])->name('login');
Route::post('/admin/auth/login', [AdminLogin::class, 'login'])->withoutMiddleware('csrf');

Route::get('/admin/auth/logout', function () {
    session()->forget('admin');
    return redirect('/admin/login');
});

Route::group(['middleware' => [EnsureAdminValid::class]], function () {
    Route::any('/admin/dashboard/{method}', [AdminDashboard::class, 'dynamicMethod'])
        ->where('method', '.*');
});

// End Admin Routes
