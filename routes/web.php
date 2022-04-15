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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin.profiles', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// lecturers route
Route::prefix('lecturers')->middleware('auth')->group(function (){
Route::get('/dashboard', [App\Http\Controllers\Lecturer\DashboardController::class, 'index'])->name('lecturer');
Route::get('/profiles', [App\Http\Controllers\Lecturer\ProfileController::class, 'index'])->name('profiles_lec');
Route::put('/profiles/{user_id}', [App\Http\Controllers\Lecturer\ProfileController::class, 'update']);

Route::get('/complains', [App\Http\Controllers\Lecturer\ComplainsController::class, 'index'])->name('complain');
Route::post('/complains', [App\Http\Controllers\Lecturer\ComplainsController::class, 'store']);

Route::get('/change_password', [App\Http\Controllers\Lecturer\ChangePassword::class, 'index'])->name('lec_password');
Route::put('/change_password/{user_id}', [App\Http\Controllers\Lecturer\ChangePassword::class, 'update']);

Route::get('/allocation', [App\Http\Controllers\Lecturer\AllocationController::class, 'index']);
});

// students route
Route::get('students/dashboard', [App\Http\Controllers\Student\DashboardController::class, 'index'])->middleware('auth')->name('students');
Route::get('students/profiles', [App\Http\Controllers\Student\ProfileController::class, 'index'])->middleware('auth')->name('student_profile');


Route::prefix('admin')->middleware('auth','isAdmin')->group(function (){
	Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');

	Route::get('/profiles', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profiles');
	Route::post('/profiles', [App\Http\Controllers\Admin\ProfileController::class, 'store']);


	Route::get('/students', [App\Http\Controllers\Admin\StudentController::class, 'index']);
	Route::post('/students', [App\Http\Controllers\Admin\StudentController::class, 'store'])->name('addStudent');

	Route::get('/specialization', [App\Http\Controllers\Admin\SpecializationController::class, 'index'])->name('special');
	Route::post('/specialization', [App\Http\Controllers\Admin\SpecializationController::class, 'store']);


	Route::get('/lecturers', [App\Http\Controllers\Admin\LecturerController::class, 'index']);
	Route::get('/view_courses', [App\Http\Controllers\Admin\CoursesController::class, 'index']);
	Route::get('/add_courses', [App\Http\Controllers\Admin\CoursesController::class, 'add']);
	Route::post('/add_courses', [App\Http\Controllers\Admin\CoursesController::class, 'store'])->name('addCourses');
	Route::get('/complains', [App\Http\Controllers\Admin\ComplainController::class, 'index']);
	Route::get('/view_allocated', [App\Http\Controllers\Admin\AllocationController::class, 'index']);
	Route::get('/allocate', [App\Http\Controllers\Admin\AllocationController::class, 'add']);
});

