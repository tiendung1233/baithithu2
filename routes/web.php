<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;
use App\Http\Controllers\StudentController;

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
Route::get('all',[StudentController::class,'get_all_student']);
Route::get('add',[StudentController::class,'get_add'])->name('user.add');

Route::get('/edit/{id}',[StudentController::class,'showedit'])->name('user.edit');
Route::put('/edit/{id}',[StudentController::class,'edit']);

