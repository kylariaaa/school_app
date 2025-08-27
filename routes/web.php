<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolClassController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);

Route::get('/teachers/with-students', [TeacherController::class, 'listTeachersWithStudents']);
Route::resource('school-classes', SchoolClassController::class);
