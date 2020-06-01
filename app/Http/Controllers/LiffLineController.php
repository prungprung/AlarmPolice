<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiffLineController extends Controller
{

    public function _construct()
    {
    }
    public function lineData(Request $request)
    {
        $postbody = $request->data;
    }
}
