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

Route::resource('investigacion','EHController');

Route::get('/ver_investigacion', function () {
    return view('ver_investigacion');
});

Route::get('/delimitacion_tema', function () {
    return view('delimitacion_tema');
});



//Login
Auth::routes(['register' => false]);
Route::get('login#signup', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('login#signup', 'Auth\RegisterController@register');
//Login

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/configuracion', function () {
    return view('configuracion');
});

Route::get('/home', 'HomeController@index')->name('home');


//Administracion
Route::get('/users', function () {
    return view('users');
});
//Fin de Administracion
