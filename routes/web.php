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

Route::get('/male_name', 'AvatarController@male_name');
Route::get('/male_bd', 'AvatarController@male_bd');
Route::post('/male_hobi', 'AvatarController@male_hobi');
Route::post('/male_instrument', 'AvatarController@male_instrument');
Route::post('/male_risanke', 'AvatarController@male_risanke');
Route::post('/male_prijatelji', 'AvatarController@male_prijatelji');
Route::post('/male_barva', 'AvatarController@male_barva');
Route::post('/male_zival', 'AvatarController@male_zival');
Route::post('/male_letnicas', 'AvatarController@male_letnicas');
Route::post('/male_spoznanje', 'AvatarController@male_spoznanje');
Route::get('/male_pomoc', 'AvatarController@male_pomoc');
Route::get('/male_pomoc2', 'AvatarController@male_pomoc2');