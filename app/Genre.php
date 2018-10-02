<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //protected table = "generos"
    // esto se usa por si la tabla no esta en plural usar este atributo
    //public $timestamps = false ,  si no tengo created at y/o update_at Si no tenes estas columnas tenes que poner en false

     private $laravel = 'Test';
    public function getName(){
      return $this -> laravel ;
    }
}
