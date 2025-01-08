<?php

use App\Http\Controllers\User_Controller;
use App\Http\Controllers\UserController;
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
Route::get('/display', function () {
    return view('display');
})->name('display');
Route::get('/show',[UserController::class,'show'])->name('show');
Route::post('/add',[UserController::class,'addUser'])->name('add');
Route::view('adduser','/adduser')->name('adduser');
Route::get('/delete/{id}',[UserController::class,'deleteUser'])->name('delete');
Route::post('/update/{id}',[UserController::class,'updateUser'])->name('updateuser');
Route::get('/edit/{id}',[UserController::class,'editUser'])->name('update');

