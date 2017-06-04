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

Route::get('/proizvodi', 'ProizvodController@index');
Route::get('/proizvod', 'ProizvodController@create');
Route::get('/proizvod/{id}', 'ProizvodController@show');
Route::post('/proizvod', 'ProizvodController@store');
Route::post('/proizvod/{id}', 'ProizvodController@update');

Route::get('/radnici', 'RadnikController@index');
Route::get('/radnik', 'RadnikController@create');
Route::get('/radnik/{id}', 'RadnikController@show');
Route::post('/radnik', 'RadnikController@store');
Route::post('/radnik/{id}', 'RadnikController@update');

Route::get('/skladista', 'SkladisteController@index');
Route::get('/skladiste', 'SkladisteController@create');
Route::get('/skladiste/{id}', 'SkladisteController@show');
Route::post('/skladiste', 'SkladisteController@store');
Route::post('/skladiste/{id}', 'SkladisteController@update');

Route::get('/izvjesca', 'IzvjesceController@index');
Route::get('/izvjesce', 'IzvjesceController@create');
Route::get('/izvjesce/{id}', 'IzvjesceController@show');
Route::post('/izvjesce', 'IzvjesceController@store');
Route::post('/izvjesce/{id}', 'IzvjesceController@update');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', '\iooa_proizvodni_is\Http\Controllers\Auth\LoginController@logout');
