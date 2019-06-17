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

Route::get('/cuestionario', 'CuestionarioController@create');
Route::post('/cuestionario/store', 'CuestionarioController@store');

Route::get('/investigacion', 'EHController@create');
Route::post('/investigacion/store', 'EHController@store');

Route::get('/fundamento', 'UnidadInformacionController@create');
Route::post('/fundamento/store', 'UnidadInformacionController@store');



Route::get('/holograma', function () {
    return view('investigacion.holograma');
});

Route::get('/fase_proyectiva', function () {
    return view('investigacion.fase_proyectiva');
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
