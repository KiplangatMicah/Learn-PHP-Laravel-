<?php

use App\Http\Controllers\UserConn;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('loginn','login');
Route::post('login',[UserController::class,'login'] );

Route::view('profile','profile');
Route::get('logout',[UserController::class,'logout'] );

Route::view('users','usersession');
Route::post('addUser',[UserConn::class,'addUser'] );
