<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function vista1(){
      return 'Hola desde el controller';
    }

    public function vista2(){
      $mostrar = rand(0,1);
      $i = 10;
      return view('vista2', ['mostrar' => $a, 'i' => $b]);
    }
}
