<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MotivationController;

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

Route::get('/motivation', function(){
    return view('motivation');
});



Route::get('/motivation',[MotivationController::class,'motivation']);
Route::get('/motivation_create', function(){
    return view('motivation_create');
});
Route::post('/motivation_create',[MotivationController::class,'create'])->name('motivation_submit');
Route::get('/list_motivation',[MotivationController::class,'motivations']);
Route::get('/motivation_destroy/{id}',[MotivationController::class,'destroy']);
Route::put('/motivation_edit/{id}',[MotivationController::class,'update']);
Route::get('/motivation_edit',[MotivationController::class,'editpage']);
