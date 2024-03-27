<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function dynamicMethod(Request $request, $method)
    {
        if (method_exists($this, $method)) {
            return $this->$method($request);
        } else {
            abort(404);
        }
    }
}
