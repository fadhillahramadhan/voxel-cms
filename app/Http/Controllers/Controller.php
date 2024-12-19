<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\TableLib;

abstract class Controller
{


    public $tableLib;
    public $session;

    public function __construct(Request $request)
    {
        $this->tableLib = new TableLib();

        // session 
        // $this->session = $request->session();

        // check if there any session
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
