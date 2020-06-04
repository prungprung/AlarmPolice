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
        $data = 
        [
          "responseId"=> "2b5c795e-5cac-4239-939d-d1af4d475131-b4a98e7e",
          "queryResult"=> [
            "queryText"=> "อะไรนะ",
            "parameters"=> [],
            "languageCode"=> "th"
          ]
        ];
    
        

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.line.me/v2/bot/richmenu",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($data),
          CURLOPT_HTTPHEADER => array(
            "authorization: Bearer mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU=",
            "content-type: application/json"
          ),
        ));

        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "POST"){
        $requestBody = file_get_contents('php://input');
        $json = json_decode($requestBody);
        $text = $json->queryResult->queryText;
        
        switch($text){
            case 'hi':
                $speech = "Hi my 8.";
            break;
            case '777':
                $speech = "bye my 777.";
            break;
            default:
            $speech = "Say default.";
            break;
        }

        $response = new \stdClass();
        $response->speech=gettype($text);
        $response->displayText=$speech;
        $response->source="webhook";
        echo json_encode($response);
        return  $response->header('Content-Type', 'text/plain');
        }else{
        echo "metho not allowed";
        }
        // return view('/defaultview/Checkvalue');
    }
  
}
