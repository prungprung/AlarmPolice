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
        $decode = json_decode($postbody);
        app('App\Http\Controllers\RichMenuController')->RichMenu("login");
        app('App\Http\Controllers\RichMenuController')->setUserId($decode->userId);
        app('App\Http\Controllers\RichMenuController')->setAccessToken($decode->accessToken);
    }
}
