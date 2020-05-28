<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiffLineController extends Controller
{

    public function _construct()
    {

    }
    public function Liff(Request $request){
        if (count($request->json()->all())) {
            $postbody = $request->json()->all();
            print_r($postbody) ;
            return View('defarutview/showvalue')->compact('postbody');
            
        }
    }
   
}
