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
        if($method =='POST'){
            $requestBody = file_get_contents('php://input');
            $json = json_decode($requestBody);

            $text = $json->queryResult->parameter->text;
            switch($text){
                case 'hi':
                    $speech = 'hello boi';
                    break;
                default :
                    $speech = 'default';
                    break;
            }
            $response = new \stdClass();
            $response->speech = "";
            $response->displayText = "";
            $response->source = "webhook";
            echo json_encode($response);

        }else{
            echo "Method not allowed";
        }
    }
}
