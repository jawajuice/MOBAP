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
Route::get('/age', 'VisitorController@age');
Route::get('/gender', 'VisitorController@gender');
Route::get('/mood', 'VisitorController@mood');
Route::get('/avatar_name', 'VisitorController@avatarName');
Route::get('/avatar', 'AvatarController@avatar');
Route::get('/male_hobi', 'AvatarController@male_hobi');
Route::get('/male_trening', 'AvatarController@male_trening');
Route::get('/male_instrument', 'AvatarController@male_instrument');
Route::get('/male_prijatelji', 'AvatarController@male_prijatelji');
Route::get('/male_barva', 'AvatarController@male_barva');
Route::get('/male_igre', 'AvatarController@male_igre');
Route::get('/male_idol', 'AvatarController@male_idol');
Route::get('/male_risanke', 'AvatarController@male_risanke');
Route::get('/male_spoznanje', 'AvatarController@male_spoznanje');
Route::get('/male_predmet', 'AvatarController@male_predmet');
Route::get('/male_glasba', 'AvatarController@male_glasba');
Route::post('/age','VisitorController@age');
Route::post('/mood','VisitorController@mood');
Route::post('/gender','VisitorController@gender');
Route::post('/male_zival', 'AvatarController@male_zival');
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
Route::get('/male_zival', 'AvatarController@male_zival');
Route::get('/male_letnicas', 'AvatarController@male_letnicas');
Route::post('/male_letnicas', 'AvatarController@male_letnicas');
Route::post('/male_spoznanje', 'AvatarController@male_spoznanje');
Route::get('/male_pomoc', 'AvatarController@male_pomoc');
Route::get('/male_pomoc2', 'AvatarController@male_pomoc2');
Route::get('/zanima', 'AvatarController@zanima');
Route::get('/info_locitev', 'AvatarController@locitev');
Route::post('/avatar_name', 'VisitorController@avatarName');

Route::get('/locitev2', function () {
    return view('info/locitev2');
});
Route::get('/locitev3', function () {
    return view('info/locitev3');
});
Route::get('/bravo', function () {
    return view('info/bravo');
});

Route::get('/avatar_start', function () {
    return view('avatars/male/index');
});
Route::get('/avatar/hair', function () {
    return view('avatars/create/hair');
});

Route::get('/avatar/create', function () {
    return view('avatars/create/create');
});

Route::get('/avatar/shirt', function () {
    return view('avatars/create/shirt');
});
Route::get('/avatar/pants', function () {
    return view('avatars/create/pants');
});
Route::get('/avatar/shoes', function () {
    return view('avatars/create/shoes');
});
Route::get('/avatar/skin', function () {
    return view('avatars/create/skin');
});