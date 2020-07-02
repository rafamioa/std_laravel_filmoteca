<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaAtores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->text('biografia', 500);
            $table->integer('idade');
            $table->date('data_nascimento');
            $table->date('data_falecimento')->nullable();
            $table->unsignedInteger('pais_id');
            $table->unsignedInteger('sexo_id');
            $table->string('imagem')->nullable();

            $table->foreign('pais_id')->references('id')->on('paises');    
            $table->foreign('sexo_id')->references('id')->on('sexos');       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atores');
    }
}
