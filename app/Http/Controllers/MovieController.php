<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($title)
    {

      $peliculas = Movie::where('title','like',"%$title%")->get();
      //poner variable despues del operador
      //dd($peliculas);
      return view ('peliculas', ['peliculas' => $peliculas]);


    }


    public function detail($id){

       $movie = Movie::find($id);
       return view('movie.index',['movie' => $movie]);

    }



}
