<?php

namespace App\Http\Controllers\VO;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class Dashboard extends Controller
{
    public function dynamicMethod(Request $request, $method)
    {
        if (method_exists($this, $method)) {
            return $this->$method($request);
        } else {
            abort(404);
        }
    }

    public function show()
    {
        return Inertia::render('VO/Home');
    }

    public function settings()
    {
        return Inertia::render('VO/Settings');
    }
}
