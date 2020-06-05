<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifyController extends Controller
{

    public function _construct()
    {
    }
    public function Notify()
    {
        $message = array("message" => "สวัสดรีจร้าาา\nเราปรุงเอง");
        $url = 'https://notify-api.line.me/api/notify';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $message,
            CURLOPT_HTTPHEADER => array(
                "accept: */*",
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
