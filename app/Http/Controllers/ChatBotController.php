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
        }else{
        echo "metho not allowed";
        }
        // return view('/defaultview/Checkvalue');
    }
  
}
