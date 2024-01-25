<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidController;

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

//KidController
Route::get('/index',[KidController::class,'home']);
Route::get('/about',[KidController::class,'about']);
Route::get('/class',[KidController::class,'class']);
Route::get('/teacher',[KidController::class,'teacher']);
Route::get('/gallery',[KidController::class,'gallery']);
Route::get('/contact',[KidController::class,'contact']);
Route::get('/join',[KidController::class,'joinclass']);