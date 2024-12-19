<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\TableLib;

abstract class Controller
{


    public $tableLib;

    public function __construct()
    {
        $this->tableLib = new TableLib();
    }

    public function dynamicMethod(Request $request, $method)
    {
        if (method_exists($this, $method)) {
            return $this->$method($request);
        } else {
            abort(404);
        }
    }
}
