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

Route::get('/index', 'TaskController@index');

Route::get('/book','TaskController@showBook');

Route::get('/book/insertBook', 'TaskController@formInsertBook');

Route::post('/book/insertBook', 'TaskController@insertBook');

Route::get('/book/delete','TaskController@deleteBook');