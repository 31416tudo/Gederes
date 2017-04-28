<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ingredientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('ingredientes', function(Blueprint $tabla){
            $tabla->string('nombreIngrediente', 50);
            $tabla->primary('nombreIngrediente');
            $tabla->integer('cantidad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::Drop('ingredientes');
    }
}
