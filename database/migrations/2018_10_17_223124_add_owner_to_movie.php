<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOwnerToMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('movies', function (Blueprint $table) {
        $table->integer('owner_id')->nullable()->unsigned()->index();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('movies', function (Blueprint $table) {
        $table->dropColumn('owner_id');
    });
    }
}
