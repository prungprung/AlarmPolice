<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiffLineController extends Controller
{

    public function _construct()
    {

    }
    public function Liff(Request $request){
            $postbody = $request->json;
            print_r($request);
            print_r("\n");
            print_r($postbody);
            exit();
            return view('defaultview/showvalue',compact('postbody'));
    }
   
}
