<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function index()
    {
        return view('fcm');
    }

    public function send_notif(){
        $token = "eUn449zyLwA:APA91bHqp23zNHq_gNKtzHy1j7rW1Ql3MmxTjCoGzsCWgaZm19z2nGkBiZsghhOHaO58SwHP6oUCRyyVQWAvsqlRAkivv_oOHp4qfpnQ4ij-2hwjbZX6ZiaTZlzFTaifLMO4ZY__rATa";  
        $from = "AAAAVlK3XUY:APA91bGVf30hjX3JxkeFAA0NMfpWU79JbSWxYz6td-Lgjt1jP0m6xtGy8UNs58xRCfV7-nAKA8ZCP9k64HeHn1zJO6Ed22bNQI6xJq-Eqt1VWsHLxB-8o64gGPSLNxGqdf61cfF7X7ga";
        $msg = array
              (
                'body'  => "Firebase Send Notification Laravel 5.8 ",
                'title' => "Hi, From Sodik",
                'receiver' => 'erw',
                'icon'  => "https://image.flaticon.com/icons/png/512/270/270014.png",/*Default Icon*/
                'sound' => 'mySound'/*Default sound*/
              );

        $fields = array
                (
                    'to'        => $token,
                    'notification'  => $msg
                );

        $headers = array
                (
                    'Authorization: key=' . $from,
                    'Content-Type: application/json'
                );
        //#Send Reponse To FireBase Server 
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        // dd($result);
        curl_close( $ch );
    }
}
