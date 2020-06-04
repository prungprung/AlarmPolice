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
        if($method == "GET"){
        $requestBody = file_get_contents('php://input');
        $json = json_decode($requestBody);
        // $text = $json->queryResult->queryText;
                    $text = "5550";
        switch($text){
            case 'hi':
                $speech = "Hi my 8.";
            break;
            case 'by':
                $speech = "bye my 8.";
            break;
            default:
            $speech = "Say default.";
            break;
        }

        $response = new \stdClass();
        $response->speech=$speech;
        $response->displayText="ปรุง";
        $response->source="webhook";
        echo json_encode($response);
        }else{
        echo "metho not allowed";
        }
        // return view('/defaultview/Checkvalue');
    }
  
}