<?php

namespace App\Http\Controllers;

use App\Genre;
//eso es mas el nombre de clase  el modelo
use Illuminate\Http\Request;

class GenreController extends Controller
{
     public function index()
     {
       //listar los generos por convencion index

        //$genre = Genre::all();
        $genres = Genre::orderBy('name')->get();

        return view('genres.index',['generos' => $genres]);
        //el indice
        //esta es la vista index.blade.php se pone sin la extension  se puede usar barra o punto
     }

     public function lastModified()
     {

       $genres = Genre::where('updated_at','>=','2018-01-01')->orderBy('name')->get();
       //get para ejecutar un where.
       return view('genres.index',['generos' => $genres]);

     }


    public function show($id){

           $genre = Genre::find($id);

           return view('genres.show',['genre' => $genre]);

           //return $genre-toArray(5);

    }


    public function insert()
    {

        /*  $genre = new Genre;
          $genre->name = 'Animadas';
          $genre->ranking = 13;
          $genre->active = 1;
          $genre->save();
          */

         $genre = Genre::create([
          'name' => 'SitCom',
          'ranking' => 14,
          'active' => 1,

         ]);

           dd($genre->toArray());

    }




}
