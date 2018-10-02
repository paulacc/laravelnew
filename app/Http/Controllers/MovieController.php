<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index($title){

      $peliculas = Movie::where('title','like',"%$title%")->get();
      //poner variable despues del operador
      //dd($peliculas);
      return view ('peliculas', ['peliculas' => $peliculas]);


    }


   public function create()
   {
    return   
   }




}
