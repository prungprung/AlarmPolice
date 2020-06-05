<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendTextController extends Controller
{
    public function _construct()
    {
    }
    public function SendText()
    {
        $arrays = $this->readText();
        print_r($arrays);
        $lenght = count($arrays);
        for ($i = 0; $i < $lenght; $i++) {
            echo "-";
            echo $i;

            $data = [
                "to" => $arrays['userId.' . $i],
                "messages" => [
                    [
                        "type" => "text",
                        "text" => "hello"
                    ]
                ]
            ];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.line.me/v2/bot/message/push",
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
            $response = curl_exec($curl);
            curl_close($curl);
        }
    }
    public function readText()
    {
        // Read File
        $jsonString = file_get_contents(base_path('resources/lang/en/en.json'));
        $data = json_decode($jsonString, true);
        return $data;
    }
}
