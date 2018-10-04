<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

     protected $fillable = [
      'name',
      'ranking',
      'active'

     ];
     //esto de fillable indica que columnas se pueden ingresar masivamente 
    //protected table = "generos"
    // esto se usa por si la tabla no esta en plural usar este atributo
    //public $timestamps = false ,  si no tengo created at y/o update_at Si no tenes estas columnas tenes que poner en false

     //private $laravel = 'Test';
    //public function getName(){
      //return $this -> laravel ;

     public function movies()
     {

          return $this->hasMany(Movie::class);

     }


  }
