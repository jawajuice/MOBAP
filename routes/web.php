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
Route::post('/male_trening', 'AvatarController@male_trening');
Route::post('/male_glasba', 'AvatarController@male_glasba');
Route::post('/male_igre', 'AvatarController@male_igre');
Route::post('/male_idol', 'AvatarController@male_idol');
Route::post('/male_predmet', 'AvatarController@male_predmet');
Route::post('/male_instrument', 'AvatarController@male_instrument');
Route::post('/male_risanke', 'AvatarController@male_risanke');
Route::post('/male_prijatelji', 'AvatarController@male_prijatelji');
Route::post('/male_barva', 'AvatarController@male_barva');
Route::post('/male_zival', 'AvatarController@male_zival');
Route::post('/male_letnicas', 'AvatarController@male_letnicas');
Route::post('/male_spoznanje', 'AvatarController@male_spoznanje');
Route::get('/male_pomoc', 'AvatarController@male_pomoc');
Route::get('/male_pomoc2', 'AvatarController@male_pomoc2');
Route::get('/zanima', 'AvatarController@zanima');
Route::get('/info_locitev', 'AvatarController@locitev');

Route::get('/locitev2', function () {
    return view('info/locitev2');
});
Route::get('/locitev3', function () {
    return view('info/locitev3');
});
Route::get('/bravo', function () {
    return view('info/bravo');
});