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


Route::get('controllers/vista1','EjemploController@vista1');
Route::get('controllers/vista2','EjemploController@vista2');


Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');
Route::get('peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');
