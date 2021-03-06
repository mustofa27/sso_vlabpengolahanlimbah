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

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::get('/logout', 'App\Http\Controllers\MainController@logout');
Route::get('/modul_cod', 'App\Http\Controllers\MainController@cod');
Route::get('/modul_aerobik', 'App\Http\Controllers\MainController@aerobik');
Route::get('/modul_anaerobik', 'App\Http\Controllers\MainController@anaerobik');
