<?php

namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;


class Login extends Controller
{

    public function show()
    {
        return Inertia::render('Public/Login');
    }
}
