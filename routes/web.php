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



Route::get('/', function () {
    return view('izbornik');
});

Route::get('/stroj', 'StrojController@create');
Route::get('/stroj/{id}', 'StrojController@show');
Route::post('/stroj', 'StrojController@store');
Route::post('/stroj/{id}', 'StrojController@update');

Route::get('/strojevi', 'StrojController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
