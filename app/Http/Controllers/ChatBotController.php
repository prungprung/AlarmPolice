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
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://intense-scrubland-71413.herokuapp.com/public/sendchatbot",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS =>$data,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Cookie: XSRF-TOKEN=cfd65b096b3c4c2d87cf6ac4001d57d4"
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
