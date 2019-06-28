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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login', 'Auth/LoginController@index')->name('login');

//Route::get('personas', ['uses'=>'PersonaController@index', 'as'=>'personas.index'])->middleware('auth');
Route::get('user/api/{id}', ['uses'=>'UserController@editDataApi', 'as'=>'users.api'])->middleware('auth');
Route::post('user/reset-api-token', ['uses'=>'UserController@resetApiToken', 'as'=>'users.reset_api_token'])->middleware('auth');

Route::resource('alumnos','AlumnoController')->middleware('auth');
