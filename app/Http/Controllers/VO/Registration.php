<?php

namespace App\Http\Controllers\VO;

use App\Http\Controllers\Controller;
use Inertia\Inertia;


class Registration extends Controller
{

    public function show()
    {
        return Inertia::render('VO/Registration');
    }
}
