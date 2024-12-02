<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
{
    // Store the 'name' input in the session
    session()->put("name", $request->input("name"));

    // Store all input data in the session
    session()->put("allData", $request->input());

    // Redirect to the profile page
    return redirect('profile');
}
    function logout(Request $request){
        session()->pull('name');
        return redirect('profile');
    }
    //
}
