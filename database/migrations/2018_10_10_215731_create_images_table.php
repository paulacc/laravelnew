<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
              //images el nombre de la tabla,  luego funcion anonima $table
        Schema::create('images', function (Blueprint $table) {
            $table->smallIncrements('id'); //integer autoincremental sin signos primary key
            $table->string('src',100);//varchar
            $table->integer('movie_id')->unsigned()->index();
            $table->text('description')->nullable(); //nullable puede no tener
            //hace el created up y el update dat
            //$table->float('price', 6,2);
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
        Schema::dropIfExists('images');

    }




}
