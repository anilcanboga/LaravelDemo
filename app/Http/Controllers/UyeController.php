<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class UyeControl extends Controller
{
    public function send()
    {
      $email = "menegoc167@yehudabx.com";
      $array = [
        'name' => 'Ornek',
        'surname' => 'Deneme'
      ];

      mail::send('DenemeRegister', $array, function($message){
        $message->subject('Hoşgeldin');
        $message->to('menegoc167@yehudabx.com');
      });
    }
}
