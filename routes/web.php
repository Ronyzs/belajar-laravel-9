<?php

use App\Http\Controllers\Student;
use App\Http\Controllers\Teacher;
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

Route::get('/students', [Student::class, 'index']);
Route::get('/students/filter', [Student::class, 'filter']);

Route::get('/students/{num}', [Student::class, 'show']);

Route::get('/teacher/{num}', [Teacher::class, 'index']);

Route::get('/student/activity/{num}', [Student::class, 'studentActivity']);
