<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehiclesController;

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

Route::get('/admin',[AdminController::class,'index']);

// Vehicle Routes
Route::get('/vehicles',[VehiclesController::class,'index']);
Route::get('/vehicles/track',[VehiclesController::class,'track']);
Route::get('/vehicles/add',[VehiclesController::class,'add']);
Route::get('/vehicles/delete/{id}',[VehiclesController::class,'delete']);


// Driver Routes
