<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Platillo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('platillo', function(Blueprint $tabla){
            $tabla->string('nombrePlatillo', 100);
            $tabla->primary('nombrePlatillo');
            $tabla->string('descripcion');
            $tabla->string('tipo');
            $tabla->decimal('precio',5,2);
            $tabla->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('platillo');
    }
}
