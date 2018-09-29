<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
   public function  buscarPeliculaId($id){

     $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
            ];

              foreach ($peliculas as $key => $value) {
                if($id == $key){
                  return $value;
                }
              }
         }


     public function buscarPeliculaNombre($nombre){
       $peliculas = [
              1 => "Toy Story",
              2 => "Buscando a Nemo",
              3 => "Avatar",
              4 => "Star Wars: Episodio V",
              5 => "Up",
              6 => "Mary and Max"
              ];



          foreach ($peliculas as $key => $value) {
            if ($nombre == $value){
              return $value;
            }
          }
          return "No hay coincidencia";

          }


      public function mostrarListado(){

        $peliculas = [
               1 => "Toy Story",
               2 => "Buscando a Nemo",
               3 => "Avatar",
               4 => "Star Wars: Episodio V",
               5 => "Up",
               6 => "Mary and Max"
               ];


          return view ('peliculas', ['peliculas' => $peliculas]);

      }


}
