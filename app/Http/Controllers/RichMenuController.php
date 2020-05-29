<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot;

class RichMenuController extends Controller
{
  public $userId = "";
  public $accessToken = "";
  public function _construct()
  {
  }
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  function getUserId()
  {
    return $this->userId;
  }
  public function setAccessToken($accessToken)
  {
    $this->accessToken = $accessToken;
  }
  function getAccessToken()
  {
    return $this->accessToken;
  }
  public function RichMenu($context)
  {
   
    if ($context == "login") {
      $dataFile = 'http://intense-scrubland-71413.herokuapp.com/public/image/linerichmenu_3_.jpeg';
      $data =  [
        "size" => [
          "width" => 2500,
          "height" => 843
        ],
        "selected" => true,
        "name" => "login",
        "chatBarText" => "Menu",
        "areas" => [
          [
            "bounds" => [
              "x" => 0,
              "y" => 0,
              "width" => 1246,
              "height" => 843
            ],
            "action" => [
              "type" => "uri",
              "uri" => "https://liff.line.me/1654272826-Rw6k9XEd" 
            ]
          ],
          [
            "bounds" => [
              "x" => 1250,
              "y" => 0,
              "width" => 1250,
              "height" => 840
            ],
            "action" => [
              "type" => "uri",
              "uri" => "http://intense-scrubland-71413.herokuapp.com/public/carblacklist"
            ]
          ]
        ]
      ];
    } else {
      $dataFile = 'http://intense-scrubland-71413.herokuapp.com/public/image/linerichmenu_1_.jpeg';
      $data = [
        "size" => [
          "width" => 2500,
          "height" => 1686
        ],
        "selected" => true,
        "name" => "notLogin",
        "chatBarText" => "Menu",
        "areas" => [
          [
            "bounds" => [
              "x" => 0,
              "y" => 0,
              "width" => 2500,
              "height" => 847
            ],
            "action" => [
              "type" => "uri",
              "uri" => "http://www.highway.police.go.th/index_home2559.php"
            ]
          ],
          [
            "bounds" => [
              "x" => 0,
              "y" => 839,
              "width" => 1271,
              "height" => 847
            ],
            "action" => [
              "type" => "uri",
              "uri" => "http://intense-scrubland-71413.herokuapp.com/public/login"
            ]
          ],
          [
            "bounds" => [
              "x" => 1267,
              "y" => 835,
              "width" => 1233,
              "height" => 851
            ],
            "action" => [
              "type" => "uri",
              "uri" => "http://intense-scrubland-71413.herokuapp.com/public/sendrichmenu/nonlogin"
            ]
          ]
        ]
      ];
    }

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
    // https://api.line.me/v2/bot/user/U4638e9a419fd8a40e2ee1164bda3145c/richmenu/richmenu-818d92776b6bd7b6d042388b7a7cefbb
    // "https://api-data.line.me/v2/bot/richmenu/" . $richmenu . "/content"
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $richmenu = substr($response, 15, 41);
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL =>  "https://api-data.line.me/v2/bot/richmenu/" . $richmenu . "/content",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => file_get_contents($dataFile),
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU=",
        "Content-Type: image/jpeg"
      ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $curl = curl_init();
        curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.line.me/v2/bot/user/U4638e9a419fd8a40e2ee1164bda3145c/richmenu/".$richmenu,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($data),
      CURLOPT_HTTPHEADER => array(
        "authorization: Bearer mCJv5+R/NzahU6FczR8quazO0HpzsjHUhj8ygOptTepkz4VLY7GJ25ZY/IbmT0zCliv4ryqsdstJkJ2XaAKleH10Oor5/RfLWvWpZ8G5Z85xlABpWumYnTsfMYToaiaiK9k5wBEHiyWpR+xATHtY/QdB04t89/1O/w1cDnyilFU=",
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    // return redirect('/defaultview');
  }
}
