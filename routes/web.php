<?php

use App\Http\Controllers\ContractController;
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
Route::resource('users', \App\Http\Controllers\UserController::class);


Route::resource('/books', \App\Http\Controllers\BookController::class);
Route::resource('companies', \App\Http\Controllers\CompanyController::class);

Route::resource('contracts', ContractController::class);

Route::resource('suka', \App\Http\Controllers\SukaController::class);

Route::resource('students', \App\Http\Controllers\StudentController::class);


Route::resource('teachers', \App\Http\Controllers\TeacherController::class);
