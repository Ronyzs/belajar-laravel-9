<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Teacher;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class, 'index']);
Route::get('/students/filter', [StudentController::class, 'filter']);

Route::get('/students/{num}', [StudentController::class, 'show']);

Route::get('/teacher/{num}', [Teacher::class, 'index']);

Route::get('/student/activity/{num}', [StudentController::class, 'studentActivity']);

Route::get('/activity/{num}', [ActivityController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
