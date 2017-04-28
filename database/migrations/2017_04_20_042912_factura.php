<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Factura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function(Blueprint $table){
            $table->increments('id_factura');
            $table->integer('orden')->unsigned();
            $table->foreign('orden')->references('id_orden')->on('orden')->onDelete('cascade');
            $table->decimal('monto',7,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factura');
    }
}
