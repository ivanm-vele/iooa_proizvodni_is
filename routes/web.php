<?php

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
use Illuminate\Support\Facades\DB;


Route::get('/', 'NaslovnaController@index');

Route::get('/strojevi', 'StrojController@index');
Route::get('/stroj', 'StrojController@create');
Route::get('/stroj/{id}', 'StrojController@show');
Route::post('/stroj', 'StrojController@store');
Route::post('/stroj/{id}', 'StrojController@update');




Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', '\iooa_proizvodni_is\Http\Controllers\Auth\LoginController@logout');
