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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/services', 'HomeController@services');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/emergency', 'HomeController@emergency');
Route::get('/commercial', 'HomeController@commercial');
Route::get('/waterheater', 'HomeController@waterheater');
Route::get('/sewer', 'HomeController@sewer');
Route::get('/camera', 'HomeController@camera');
Route::get('/drain', 'HomeController@drain');
Route::get('/kitchenbath', 'HomeController@kitchenbath');
