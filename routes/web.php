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

Route::get('/','App\Http\Controllers\ApplicationController@index')->name('index');
Route::get('/about','App\Http\Controllers\ApplicationController@about')->name('about');
Route::get('/contact','App\Http\Controllers\ApplicationController@contact')->name('contact');
Route::post('/contact','App\Http\Controllers\ApplicationController@contactme');
