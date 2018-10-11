<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Directors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('directors', function (Blueprint $table) {
          $table->smallIncrements('id'); //integer autoincremental sin signos primary key
          $table->string('first_name');//varchar
          $table->string('last_name');
          $table->year('birth_year');
          $table->softDeletes();
          //marca de tiempo de cuando se borro un dato de la tabla
          $table->timestamps();

      });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directors');
    }
}
