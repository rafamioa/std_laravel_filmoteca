<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaDiretores extends Migration
{
    public function up()
    {
        Schema::create('diretores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('biografia');
            $table->integer('idade');
            $table->date('data_nascimento');
            $table->date('data_falecimento')->nullable();
            $table->string('imagem')->nullable();
            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('sexo_id');

            $table->foreign('pais_id')->references('id')->on('paises');   
            $table->foreign('sexo_id')->references('id')->on('sexos');  
        });
    }


    public function down()
    {
        Schema::dropIfExists('diretores');
    }
}
