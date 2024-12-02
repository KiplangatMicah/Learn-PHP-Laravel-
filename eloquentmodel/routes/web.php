<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserCon;

Route::get('/', function () {
    return view('welcome');
});
Route::get('students', [StudentsController::class,'getStudents']);
Route::get('user', [UserCon::class,'getUser']);
