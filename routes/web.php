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

Route::get('/stroj', function () {

	return view('stroj');
});


Route::get('/strojevi', 'StrojController@index');


Auth::routes();

Route::get('/home', 'HomeController@index');
