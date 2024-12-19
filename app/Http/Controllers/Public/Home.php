<?php

namespace App\Http\Controllers\VO;

use App\Http\Controllers\Controller;
use GuzzleHttp\Psr7\Request;
use Inertia\Inertia;


class Dashboard extends Controller
{

    public function show()
    {


        return Inertia::render('VO/Home');
    }
}
