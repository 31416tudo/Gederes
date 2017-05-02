<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orden extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden', function(Blueprint $table){
            $table->increments('id_orden');
            $table->string('comentarios');
            $table->string('estatus');
            $table->decimal('monto', 10,2);
            $table->integer('cliente')->unsigned()->nullable();
            $table->foreign('cliente')->references('id')->on('users')->OnDelete('cascade');
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
        Schema::drop('orden');
    }
}
