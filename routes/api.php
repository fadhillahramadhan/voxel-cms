<?php

use App\Http\Controllers\Public\Modeling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/test', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});

Route::get('/modeling/get', [Modeling::class, 'getCustomModel'])->withoutMiddleware('csrf');
Route::post('/modeling/update', [Modeling::class, 'updateCustomModel'])->withoutMiddleware('csrf');
