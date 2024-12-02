<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class mcontroller extends Controller
{
    function sendemail(){
        $to="micahkiplangat2@gmail.com";
        $msg="Hello you";
        $subject= "Code with Pleasure";
        Mail::to($to)->send(new WelcomeMail($msg, $subject));
    }
}
