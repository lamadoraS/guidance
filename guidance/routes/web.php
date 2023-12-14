<?php

use App\Http\Controllers\CounselorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("/student", StudentController::class);
Route::resource("/counselor", CounselorController::class);
Route::resource("/appointment", AppointmentController::class);
Route::resource("/offering", OfferingController::class);
Route::resource("/admin", AdminController::class);

