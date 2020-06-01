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
        return redirect('listData', ['status' => "login",'userId' => $postbody['userId'],"accessToken"=> $postbody['accessToken']]);
    }
}
