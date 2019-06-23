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
    return view('visitors/welcome');
});

Route::get('/name', 'VisitorController@name');
Route::post('/age','VisitorController@age');
Route::post('/mood','VisitorController@mood');
Route::post('/gender','VisitorController@gender');

Route::post('/avatar','AvatarController@avatar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('forms', 'FormsController');
Route::resource('users', 'UsersController');

