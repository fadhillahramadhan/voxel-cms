<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;


class Template extends Controller
{
    public function dynamicMethod(Request $request, $method)
    {
        if (method_exists($this, $method)) {
            return $this->$method($request);
        } else {
            abort(404);
        }
    }


    public function dashboard()
    {
        return Inertia::render('Example/Dashboard');
    }


    public function alert()
    {
        return Inertia::render('Example/Alert');
    }

    public function button()
    {
        return Inertia::render('Example/Button');
    }

    public function card()
    {
        return Inertia::render('Example/Card');
    }

    public function table()
    {
        return Inertia::render('Example/Tables');
    }

    public function icons()
    {
        return Inertia::render('Example/Icons');
    }
}
