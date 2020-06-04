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
        
        $content = file_get_contents('php://input');
        $events = json_decode($content, true);
        $access_token = 'mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU=';
        if (!is_null($events['events'])) {
            foreach ($events['events'] as $event) {
                if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
                    $text = $event['source']['userId'];
                    $replyToken = $event['replyToken'];
                    $messages = [
                        'type' => 'text',
                        'text' => $text
                    ];
                    $url = 'https://api.line.me/v2/bot/message/reply';
                    $data = [
                        'replyToken' => $replyToken,
                        'messages' => [$messages],
                    ];
                    $post = json_encode($data);
                    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                    $ch = curl_init($url);
                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                    $result = curl_exec($ch);
                    curl_close($ch);
                    echo $result . "\r\n";
                }
            }
        }
        echo "OK";
    }
}
