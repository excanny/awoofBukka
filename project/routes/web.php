<?php

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


Route::get('/', 'App\Http\Controllers\FrontController@index');

Route::post('/getareas','App\Http\Controllers\FrontController@GetAreas');

Route::get('/restaurants','App\Http\Controllers\FrontController@Restaurants');

