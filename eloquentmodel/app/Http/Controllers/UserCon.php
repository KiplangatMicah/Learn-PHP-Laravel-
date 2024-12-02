<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserCon extends Controller
{
    function getUser(){
        $response= Http::get("https://jsonplaceholder.typicode.com/todos/1");
        return view("user",['data'=>json_decode($response)]);
    }
}
