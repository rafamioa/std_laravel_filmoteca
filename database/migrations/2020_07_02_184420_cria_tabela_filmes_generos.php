<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaFilmesGeneros extends Migration
{
    public function up()
    {
        Schema::create('filmes_generos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('filme_id');
            $table->unsignedInteger('genero_id');

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('filmes_generos');
    }
}
