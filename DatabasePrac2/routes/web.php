<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','AddStudent');

Route::post('/add-student', [StudentController::class, 'addStudent'])->name('addStudent');
Route::get('list', [StudentController::class, 'listStudents']);

Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::put('/edit-student/{id}', [StudentController::class, 'update'])->name('students.update');

Route::get('search', [StudentController::class,'search']);

Route::get('delete-Multi', [StudentController::class,'deleteMultiple']);



