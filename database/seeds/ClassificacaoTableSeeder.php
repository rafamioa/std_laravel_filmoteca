<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classificacoes')->insert(['tipo' =>  'L']);
        DB::table('classificacoes')->insert(['tipo' =>  '12']);
        DB::table('classificacoes')->insert(['tipo' =>  '14']);
        DB::table('classificacoes')->insert(['tipo' =>  '16']);
        DB::table('classificacoes')->insert(['tipo' =>  '18']);
    }
}
