<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class,'index'])
    ->name('student.index');
Route::get('/students/create', [StudentController::class,'create'])
    ->name('student.create');
Route::post('/students/store', [StudentController::class,'store'])
    ->name('student.store');

