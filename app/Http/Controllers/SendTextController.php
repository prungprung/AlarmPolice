<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendTextController extends Controller
{
    public function _construct()
    {
    }
    public function SendText(Request $request)
    {
        $postbody = $request->data;
        $curl = curl_init();
        $data =
        [
            "to"=> $postbody['userId'],
               "messages"=>[
                    [
                         "type"=>"text",
                         "text"=>"อะไรนิ"
               ]
                ]
                    ];
        $urls = 'https://api.line.me/v2/bot/message/push';
        curl_setopt_array($curl, array(
            CURLOPT_URL => $urls,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU=",
                "content-type: application/json"
            ),
        ));
    }
}