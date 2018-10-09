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

Route::get('peliculas/listado','PeliculasController@mostrarListado');
//esto es vistas blade
Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');
//Route::get('peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');
Route::get('peliculas/buscar/{title}', 'MovieController@index');

//MovieController


Route::get('movie/{id}', 'MovieController@detail');

//Genres

Route::get('genres','GenreController@index');
Route::get('genres/last-modified','GenreController@lastModified');

//Actor
Route::get('actores','ActorController@directory');
Route::get ('actor/{id}','ActorController@show');

Route::get('relaciones/test',function(){
   $movie = \App\Movie::find(3);//id de pelicula
   $genre = \App\Genre::find(1);//id de genre

   //$movie->genre;
   //dd($movie->genre->movies->toArray());
   dd($movie->genre->toArray());

});

Route::get('genre/insert','GenreController@insert');
Route::get('genre/{id}','GenreController@show');


Route::get('admin/movies/index', 'Admin\MovieController@index');
Route::get('admin/movies/create', 'Admin\MovieController@create');
Route::get('admin/movies/login', 'Admin\MovieController@insert');
Route::post('admin/movies','Admin\MovieController@insert');
Route::get('admin/movies/{id}/edit', 'Admin\MovieController@edit');
Route::get('admin/movies/{id}', 'Admin\MovieController@update');
















/*Route::get('relaciones/sync', function(){
  $movie = \App\Movie::find(2);
  $movie->actors()->sync([1,2])
  //sync es para tabla pibot
  //Sync sirve para modificar  ejecutamos esto 1 y 2 por ejemplo cambiara los actores
  //sync no necesita el save
  dd($movie->actors->toArray());
//usar dd para visualizar
});

Route::get('relaciones/queries', function(){
  $movie = \App\Movie::find(2);
  $actors = $movie->actors()->orderBy('first_name')->get();
  dd($actors->toArray());

});

*/
