<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diretores')->insert(['nome' => 'Steven Spielberg', 'idade'=> 73, 'data_nascimento' => '1946-12-18']);
        DB::table('diretores')->insert(['nome' => 'Stanley Kubrick', 'idade'=> 70, 'data_nascimento' => '1928-07-26']);
        DB::table('diretores')->insert(['nome' => 'Martin Scorsese', 'idade'=> 77, 'data_nascimento' => '1942-11-17']);
    }
}
