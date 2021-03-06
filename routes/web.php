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


Route::get('/', 'PageController@index');

Route::get('/results', 'PageController@results');

Route::get('/account', 'AccountController@index');

//This sets up your register and login routes automatically
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route for spinner
Route::get('/spinner', 'PageController@spinMe');
