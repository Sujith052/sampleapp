<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/',[CustomerController::class , 'index']);
Route::get('/registration',[CustomerController::class , 'registration']);
Route::post('/regaction',[CustomerController::class , 'regaction']);
Route::get('/regview',[CustomerController::class , 'regview']);
Route::get('/updatedata/{id}',[CustomerController::class , 'updatedata']);
