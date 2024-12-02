<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserConn extends Controller
{
    function addUser(Request $request){
        $request->session()->flash("message","User added successfully");
        $request->session()->flash("name","Mike");
        return redirect("users");
    }
}
