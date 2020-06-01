<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiffLineController extends Controller
{

    public function _construct()
    {
    }
    public function Liff(Request $request)
    {
        $postbody = $request->data;
        $tests = $postbody['userId'];
        app('App\Http\Controllers\RichMenuController')->RichMenu("login");
        app('App\Http\Controllers\RichMenuController')->setUserId($postbody['userId']);
        app('App\Http\Controllers\RichMenuController')->setAccessToken($postbody['accessToken']);
        return view('showvalue',compact('postbody'))
    }
}
