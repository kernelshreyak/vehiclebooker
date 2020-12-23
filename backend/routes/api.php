<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/',[Api::class,'index']);


Route::get('/vehicles',[Api::class,'index']);


// Address and Geo APIs
Route::get('/geo/geocode',[Api::class,'getAddressCoordinates']);