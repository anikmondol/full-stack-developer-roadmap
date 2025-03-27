<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

    public function sendEmail(){
        $toEmail = 'anik558363@gmail.com';
        $moreUer = "anikmondol558363@gmail.com";
        $message = "Hello, Welcome to our website";
        $subject = "Welcome to YahooBaba";
        $details = [
            'name' => 'anik',
            'product' => 'test product',
            'price' => 255
        ];


      $request =   Mail::to($toEmail)->cc($moreUer)->send(new welcomeemail($message,$subject, $details));

      dd($request);

    }

}
