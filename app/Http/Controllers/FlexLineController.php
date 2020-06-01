<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlexLineController extends Controller
{

  public function _construct()
  {
  }
  public function Flex()
  {
    $data = [
      "to" => "U4638e9a419fd8a40e2ee1164bda3145c",
      "messages" => [
        [
          "type" => "flex",
          "altText" => "Flex Message",
          "contents" => [
            "type" => "bubble",
            "direction" => "ltr",
            "header" => [
              "type" => "box",
              "layout" => "horizontal",
              "backgroundColor" => "#ffaaaa",
              "contents" => [
                [
                  "type" => "text",
                  "text" => "Hello",
                  "align" => "center"
                ]
              ]
            ],
            "hero" => [
              "type" => "image",
              "url" => "https://image.shutterstock.com/image-photo/flat-lay-fresh-tropical-fruits-600w-1717168588.jpg",
              "flex" => 1,
              "margin" => "xs",
              "size" => "full",
              "aspectRatio" => "1.51:1",
              "aspectMode" => "fit",
              "backgroundColor" => "#ffaaaa",
              "action" => [
                "type" => "uri",
                "uri" => "https://www.google.com"
              ]
            ],
            "body" => [
              "type" => "box",
              "layout" => "horizontal",
              "backgroundColor" => "#ffaaaa",
              "contents" => [
                [
                  "type" => "text",
                  "text" => "testvalue",
                  "flex" => 3,
                  "align" => "center"
                ]
              ]
            ],
            "footer" => [
              "type" => "box",
              "layout" => "horizontal",
              "backgroundColor" => "#ffaaaa",
              "contents" => [
                [
                  "type" => "button",
                  "action" => [
                    "type" => "uri",
                    "label" => "Button",
                    "uri" => "https://youtube.com"
                  ]
                ]
              ]
            ]
          ]
        ]
      ]
    ];
    $url = 'https://api.line.me/v2/bot/message/push';
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_TIMEOUT => 30000,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array(
        "accept: */*",
        "content-type: application/json",
        "Authorization: Bearer mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU="
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      $check = "cURL Error : " . $err;
    } else if ($response) {
      $check = "response Error : " . $response;
    } else {
      $check = "No cURL and response Error";
    }

    return redirect('/defaultview');
  }
}
