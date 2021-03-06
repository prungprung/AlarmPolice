<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RichMenuController extends Controller
{

  public function _construct()
  {
  }
  public function RichMenu(Request $request)
  {
    $postbody = $request->data;
    if ($postbody['status'] == "login") {
      $this->writrandread($postbody['userId']);
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
      // $dataFile = 'http://intense-scrubland-71413.herokuapp.com/public/image/linerichmenu_1_logout.jpeg';
      // $data =  [
      //   "size"=> [
      //     "width"=> 2500,
      //     "height"=> 1686
      //  ],
      //   "selected"=> true,
      //   "name"=> "Rich Menu 1",
      //   "chatBarText"=> "Bulletin",
      //   "areas"=> [
      //     [
      //       "bounds"=> [
      //         "x"=> 0,
      //         "y"=> 0,
      //         "width"=> 831,
      //         "height"=> 843
      //      ],
      //       "action"=> [
      //         "type"=> "uri",
      //         "uri"=> "https://liff.line.me/1654272826-Rw6k9XEd"
      //      ]
      //    ],
      //     [
      //       "bounds"=> [
      //         "x"=> 831,
      //         "y"=> 0,
      //         "width"=> 838,
      //         "height"=> 843
      //      ],
      //       "action"=> [
      //         "type"=> "uri",
      //         "uri"=> "http://intense-scrubland-71413.herokuapp.com/public/loginout"
      //      ]
      //    ],
      //     [
      //       "bounds"=> [
      //         "x"=> 1665,
      //         "y"=> 0,
      //         "width"=> 835,
      //         "height"=> 843
      //      ],
      //       "action"=> [
      //         "type"=> "uri",
      //         "uri"=> "http://intense-scrubland-71413.herokuapp.com/public/carblacklist"
      //      ]
      //    ]
      //   ]
      // ];
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
              "uri" => "https://liff.line.me/1654272826-aG6Wkoq8"
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
              "uri" => "https://liff.line.me/1654272826-aG6Wkoq8"
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
              "uri" => "https://liff.line.me/1654272826-aG6Wkoq8"
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
    if ($postbody['status']  == "login") {
      $urls = "https://api.line.me/v2/bot/user/" . $postbody['userId'] . "/richmenu/" . $richmenu;
    } else {
      $urls = "https://api.line.me/v2/bot/user/" . $postbody['userId'] . "/richmenu/" . $richmenu;
    }
    $response = curl_exec($curl);
    curl_close($curl);
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $urls,
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


  public function writrandread($userid)
  {
    $CheckDupicate=0;
    // Read File
    $jsonString = file_get_contents(base_path('resources/lang/en/en.json'));
    $data = json_decode($jsonString, true);
    $lenght = count($data);
    // Update Keyd
    $data['userId.' . $lenght . ''] = $userid;
    // Write File
    for ($i = 0; $i <= $lenght; $i++) {
      if(strval($data['userId.'.$i]) == strval($userid)){
       $CheckDupicate++;
      }
    }
    
    if($CheckDupicate != 0){
      $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
      file_put_contents(base_path('resources/lang/en/en.json'), stripslashes($newJsonString));
    }
    return view('defaultview/Checkvalue',compact('CheckDupicate'));
  }
}
