<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaSexos extends Migration
{
    public function up()
    {
        Schema::create('sexos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sexo');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sexos');
    }
}
