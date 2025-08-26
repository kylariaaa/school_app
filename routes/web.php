<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);

