<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFilmesDiretores extends Migration
{
    public function up()
    {
        Schema::create('filmes_diretores', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('filme_id');
            $table->unsignedInteger('diretor_id');

            $table->foreign('filme_id')->references('id')->on('filmes')->onDelete('cascade');
            $table->foreign('diretor_id')->references('id')->on('diretores')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('filmes_diretores');
    }
}
