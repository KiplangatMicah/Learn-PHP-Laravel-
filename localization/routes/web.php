<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::middleware("SetLang")->group(function () {


Route::get('/', function () {
    return view('welcome');
});

Route::get('SetLang/{lang}', function ($lang) {
    session::put('lang', $lang);
    return redirect('/');
});

});
