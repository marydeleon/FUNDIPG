<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventestudentController;
use App\Http\Controllers\HourController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InstructoreventController;



use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::resource('estudiantes',EstudianteController::class);
Route::resource('hours',HourController::class);
Route::resource('instructors',InstructorController::class);
Route::resource('classrooms',ClassroomController::class);
Route::resource('events',EventController::class);
Route::resource('eventestudents',EventestudentController::class);
//ruta instructorevento
Route::resource('instructorevents',InstructoreventController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
