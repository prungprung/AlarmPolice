<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextMessageLineController extends Controller
{

    public function _construct()
    {
        
    }
    public function TextMessageLine(){
        $data =[
            "to"=> "U4638e9a419fd8a40e2ee1164bda3145c",
            "messages"=> [
                [
              "type"=> "text",
              "text"=> "Hello Quick Reply!",
              "quickReply"=> [
               "items"=> [
                [
                 "type"=> "action",
                 "action"=> [
                  "type"=>"message",
                  "label"=>"Message",
                  "text"=>"Hello World!"
                  ]
                  ]
               ]
               ]
               ]
            ]
        ];
           $url = 'https=>//api.line.me/v2/bot/message/push';
        $curl = curl_init();
        curl_setopt_array($curl,array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "accept=> */*",
                "content-type: application/json",
                "Authorization : Bearer 64wvRQQHmWswVusrrSKd8JhrZvBIfhgExQYpu+s6mgQkxIel4dgLKcbyrxCm8SFsWEhM9hgct7SYUYQuhowOL4f21dvqBANe79FBzquSjmz/2jynK6S2xl7hEZ8xqB82pK2jmXecDfncH7SLjkr3cwdB04t89/1O/w1cDnyilFU= "
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if($err){
            $check = "cURL Error : ".$err;
        }else if($response){
            $check = "response Error : ".$response;
        }else{
            $check = "No cURL and response Error";
        }
        return redirect('/defaultview');
        }
    }
