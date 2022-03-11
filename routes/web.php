<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/movie',[MovieController::class,'index']);
Route::get('/movie/addnew',[MovieController::class,'create']);
Route::post('/movie/store',[MovieController::class,'store']);

Route::get('/movie/show',[MovieController::class,'show']);
Route::get('/movie/edit',[MovieController::class,'edit']);
Route::get('/movie/destroy',[MovieController::class,'destroy']);
