<?php

namespace App\Http\Controllers\Public;


use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;


class Home extends Controller
{

    public function show()
    {
        return Inertia::render('Public/Home');
    }
}
