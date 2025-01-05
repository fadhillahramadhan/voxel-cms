<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\EnsureMemberValid;
use App\Http\Middleware\EnsureAdminValid;

use App\Http\Controllers\Public\Home;
use App\Http\Controllers\Public\Login;
use App\Http\Controllers\Public\Register;

// handle inertia requests\


// Vo Routes

// FORWARD / INTO ADMIN
Route::get('/', [Home::class, 'show'])->name('home');
Route::get('/register', [Register::class, 'show'])->name('register');
Route::get('/login', [Login::class, 'show'])->name('login');

// Admin Routes
// Route::get('/admin/login', [AdminLogin::class, 'show_login'])->name('login');
// Route::post('/admin/auth/login', [AdminLogin::class, 'login'])->withoutMiddleware('csrf');

// Route::get('/admin/auth/logout', function () {
//     session()->forget('admin');
//     return redirect('/admin/login');
// });

// Route::group(['middleware' => [EnsureAdminValid::class]], function () {
//     Route::any('/admin/dashboard/{method}', [AdminDashboard::class, 'dynamicMethod'])
//         ->where('method', '.*');
// });

// End Admin Routes
