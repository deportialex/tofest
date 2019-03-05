<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTerrazas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrazas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('codigo');
            $table->timestamps();

            //$table->foreign('usr_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terrazas');
    }
}
