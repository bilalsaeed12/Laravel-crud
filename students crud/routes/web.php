<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddStudent;

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


// route::view("home", "home");
route::view("addStudents", "addStudents");
Route::post('addStudents', [AddStudent::class, 'addData']);
Route::get("home", [AddStudent::class, 'showData']);
Route::get('delete/{id}', [AddStudent::class, 'delete']);
Route::get('edit/{id}', [AddStudent::class, 'show']);
Route::post('edit', [AddStudent::class, 'update']);
