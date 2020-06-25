<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaDiretores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diretores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('biografia');
            $table->integer('idade');
            $table->date('data_nascimento');
            $table->unsignedInteger('pais_id');

            $table->foreign('pais_id')->references('id')->on('paises');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diretores');
    }
}
