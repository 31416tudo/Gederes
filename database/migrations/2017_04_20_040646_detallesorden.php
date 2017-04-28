<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detallesorden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesorden', function(Blueprint $tabla){
            $tabla->increments('id_detalles_orden');
            $tabla->integer('id_orden')->unsigned();
            $tabla->foreign('id_orden')->references('id_orden')->on('orden')->OnDelete('cascade');
            $tabla->string('platillo', 100);
            $tabla->foreign('platillo')->references('nombrePlatillo')->on('platillo')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detallesorden');
    }
}
