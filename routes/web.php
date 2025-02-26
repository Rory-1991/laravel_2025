<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
//     return view('welcome');
return redirect()->route('students.index');
});


Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'sayHello']);

//這裡有上面也要有 use StudentController
Route::resource('students', StudentController::class);
