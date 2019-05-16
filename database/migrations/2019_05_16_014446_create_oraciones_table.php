<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOracionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oraciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('frase');
            $table->enum('bloque', ['Uno', 'Dos','Tres','Cuatro']);
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
        Schema::drop('oraciones');
    }
}
