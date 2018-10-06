<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;

class MovieController extends Controller
{
   public function create(){

       $genres = \App\Genre::orderBy('name')->get();

       return view('admin.movies.create',['genres' => $genres]);
   }

   public function insert(Request $request)
   {
        //dd(request->all());
       //dd(request()->only(['title','rating','awards']));

      $request->validate([
        'title' => 'required|min:3|max:255',
        'rating' => 'required|numeric|max:10',
        'awards' => 'required|numeric|max:10'


      ],[
          'title.required' => 'Falta completar el titulo',
           'rating.required'  => 'El ranking es campo requerido',
          'awards.required' => 'Completa los premios de la pelicula'

      ]);
      //es para validar array asociacion indice es el id del label

      //dd('Todo bien');
      Movie::create($request->all());
      return 'creado con exito';
    //return redirect('admin/movies/login');
       //redireccion a la pagina luego del post

   }

    public function edit($id)
    {
      $movie = Movie::find($id);
      $genres = \App\Genre::orderBy('name')->get();
      return view('admin.movie.edit',['movie' => $movie],['genres' => $genres]);

    }

    public function update()
    {
      $movie = Movie::find($id);
      $movie->update(request()->all());
    }
}
