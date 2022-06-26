<?php

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
    return redirect('/login');
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::middleware([redirectAdmin::class])->group(function(){
    Route::resource('/admin-home', \App\Http\Controllers\Admin\AdminDashboardController::class);
    Route::resource('/admin-department', \App\Http\Controllers\Admin\DepartmentController::class);
    Route::resource('/admin-subject', \App\Http\Controllers\Admin\SubjectController::class);
    Route::resource('/admin-teacher', \App\Http\Controllers\Admin\TeacherController::class);
    Route::resource('/admin-student', \App\Http\Controllers\Admin\StudentController::class);
});

// Teacher Route
Route::middleware([redirectTeacher::class])->group(function(){
    Route::resource('/teacher-home', \App\Http\Controllers\Teacher\TeacherDashboardController::class);
    Route::resource('/teacher-profile', \App\Http\Controllers\Teacher\ProfileController::class);
    Route::resource('/teacher-subjects', \App\Http\Controllers\Teacher\SubjectsController::class);

});

// Student Route
Route::middleware([redirectStudent::class])->group(function(){
    Route::resource('/student-home', \App\Http\Controllers\Student\StudentDashboardController::class);
    Route::resource('/student-profile', \App\Http\Controllers\Student\ProfileController::class);
    Route::resource('/student-subjects', \App\Http\Controllers\Student\SubjectController::class);
});