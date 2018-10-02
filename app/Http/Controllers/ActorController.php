<?php

namespace App\Http\Controllers;

use App\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
     public function directory(){

              $actors = Actor::all();
              return view('actores.index',['actores' => $actors]);
     }
}
