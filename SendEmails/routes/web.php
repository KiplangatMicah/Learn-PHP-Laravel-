<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sendemail', [mcontroller::class,'sendemail']);
