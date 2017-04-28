<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detallesplato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesplato', function(Blueprint $tabla){
            $tabla->increments('id_detalles');
            $tabla->string('platillo',100);
            $tabla->foreign('platillo')->references('nombrePlatillo')->on('platillo')->OnDelete('cascade');
            $tabla->string('ingredientes', 100);
            $tabla->foreign('ingredientes')->references('nombreIngrediente')->on('ingredientes')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detallesplato');
    }
}
