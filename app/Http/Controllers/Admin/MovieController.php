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
        'awards' => 'required|numeric|max:10',

        //'banner' =>  'imagen'


      ],[
          'title.required' => 'Falta completar el titulo',
           'rating.required'  => 'El ranking es campo requerido',
          'awards.required' => 'Completa los premios de la pelicula'

      ]);
      //es para validar array asociacion indice es el id del label

     $datos = $request->all();

       //store  = array('' => , );
      // $paths = [];
       //if($request->hasFile('banners')){
        //   foreach ($request->file('banners') as $banner) {
          //   $paths[] = $banner->store('images/banners');
          //       }
      // }



      //store as
      if($request->hasFile('banner')){
        $nombre = str_slug($request->input('title'));
        $nombre .= '.' . $request->file('banner')->extension();
        //esto pregunta si existe imagen o no y luego pregunta la extension
        $path = $request->file('banner')->storeAs('images',$nombre);
         //donde se guarda la imagen si no esta lo crea dentro de storage.Dentro de ahi crea una carpeta public y guarda lo que querramos persistir
        $datos['banner'] = $path;

      }

      Movie::create($datos);
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
