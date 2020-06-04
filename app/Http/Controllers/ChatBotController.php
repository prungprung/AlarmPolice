<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    public function _construct()
    {
    }
    public function ChatBot()
    {

        $curl = curl_init();
        $data =
            [
                "queryResult" => [
                    "queryText" => "what",
                    "parameters" => ['55','55'],
                    "languageCode" => "th"
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

        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;

        // $method = $_SERVER['REQUEST_METHOD'];
        // if($method == "GET"){
        // $requestBody = file_get_contents('php://input');
        // $json = json_decode($requestBody);
        // $text = $json->queryResult->queryText;

        // switch($text){
        //     case 'hi':
        //         $speech = "Hi my 8.";
        //     break;
        //     case '777':
        //         $speech = "bye my 777.";
        //     break;
        //     default:
        //     $speech = "Say default.";
        //     break;
        // }

        // $response = new \stdClass();
        // $response->speech=gettype($text);
        // $response->displayText=$speech;
        // $response->source="webhook";
        // echo json_encode($response);
        // }else{
        // echo "metho not allowed";
        // }
        // return view('/defaultview/Checkvalue');
    }
}
