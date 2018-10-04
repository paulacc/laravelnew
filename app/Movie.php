<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //las relaciones son metodos, pero tambien lo puedo usar como atributo.

    public function genre()
    {
      //return $this->belongsTo(Genre::class,'foreing_key');
      return $this->belongsTo(Genre::class);
      //nombre de la relacion belongsTo

    }

   public function actors()
   {
      //return $this->belongsToMany(Actor::class, 'tabla de relacion','foreing_key','id');
       return $this->belongsToMany(Actor::class);

   }




}
