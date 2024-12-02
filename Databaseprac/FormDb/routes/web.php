<?php

use App\Http\Controllers\dbcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('users',[dbcontroller::class,'users'] );
