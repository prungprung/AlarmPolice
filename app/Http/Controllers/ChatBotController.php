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
          "queryResult"=> [
            "queryText"=> "what",
            "parameters"=> [],
            "languageCode"=> "th"
          ]
        ];
        $urls ='https://api.line.me/v2/bot/message/push';
        curl_setopt_array($curl, array(
          CURLOPT_URL => $urls,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Cookie: XSRF-TOKEN=eyJpdiI6IncxVUZSNVIzVlRHNWxwMjZHRno1eWc9PSIsInZhbHVlIjoiU1l2NGt1bTIxWUNhM1BFT3VWVlRVa2tCQ1JDbElsNnpyVjZPQWRHUnh3LzhiR0tidUZzajZPYjZBUVlOdWZySCIsIm1hYyI6IjI2NWJkYWNlZTQ3MTc0YThkNjYxNjY0OTRkM2MzZmM5MzRjYzc0NmIzMmQ4OTI2NzQ4NDIzYTAxZDI1NTQzYWMifQ%3D%3D; laravel_session=eyJpdiI6IjdrVklEWjZLYlhCWFVyKzhoZUluUVE9PSIsInZhbHVlIjoiYUlobG5mYUpIQUhIMEFjT1hWUm40WURWYVlHaTYzcURSMDJTVlYwb3RLSW1OVzRZbS9EZVlsUEVLNnE3TG1lVyIsIm1hYyI6IjJhYmUwNTg3OWE2MTEwNmZmYWFlODNlZGIwODUxMjIwMTcwYzY3ZmYxOWZmZmExZTMxYmE2M2VkZmNlODIyNDUifQ%3D%3D"
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
