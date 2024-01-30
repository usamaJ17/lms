<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DegreeController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('degree', DegreeController::class);
Route::resource('course', CourseController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('student',StudentController::class);
Route::resource('mark',MarksController::class);
Route::resource('fee',FeeController::class);
Route::post('mark/course',[MarksController::class,'course'])->name('mark.course');
Auth::routes();
Route::get('email',[HomeController::class,'email'])->name('email');
Route::post('email/send',[HomeController::class,'sendEmail'])->name('email.send');