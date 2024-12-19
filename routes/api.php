<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Login as AdminLogin;
use App\Http\Middleware\EnsureMemberValid;
use App\Http\Middleware\EnsureAdminCookieValid;


use App\Http\Controllers\Admin\Dashboard as AdminDashboard;



Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});


Route::post('/admin/auth/login', [AdminLogin::class, 'login_cookie']);

Route::group(['middleware' => [EnsureAdminCookieValid::class]], function () {
    Route::any('/admin/dashboard/{method}', [AdminDashboard::class, 'dynamicMethod'])
        ->where('method', '.*');
});
