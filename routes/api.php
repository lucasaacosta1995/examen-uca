<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** Rutas para modal de modificar nota de alumno en listado de alumnos.*/
Route::get('/alumno/getAlumno', 'AlumnoController@getAlumnoApi')->middleware('auth:api');
Route::post('/alumno/saveNotaAlumno', 'AlumnoController@saveNotaAlumno')->middleware('auth:api');


/** Rutas para modal crear alumno en listao de alumnos*/
Route::get('/persona/getListPersonasApi', 'PersonaController@getListPersonasApi')->middleware('auth:api');
Route::get('/comision/getListComisionesByCursoId', 'ComisionController@getListComisionesByCursoId')->middleware('auth:api');
Route::get('/curso/getListCursoByFacultadId', 'CursoController@getListCursoByFacultadId')->middleware('auth:api');
Route::post('/alumno/addAlumno', 'AlumnoController@addAlumno')->middleware('auth:api');








