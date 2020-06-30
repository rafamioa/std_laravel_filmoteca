<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->insert(['nome' => 'Ação']);
        DB::table('generos')->insert(['nome' => 'Drama']);
        DB::table('generos')->insert(['nome' => 'Esporte']);
        DB::table('generos')->insert(['nome' => 'Ficção Científica']);
        DB::table('generos')->insert(['nome' => 'Policial']);
        DB::table('generos')->insert(['nome' => 'Animação']);
        DB::table('generos')->insert(['nome' => 'Aventura']);
        DB::table('generos')->insert(['nome' => 'Biografia']);
        DB::table('generos')->insert(['nome' => 'Comédia']);
        DB::table('generos')->insert(['nome' => 'Terror']);
        DB::table('generos')->insert(['nome' => 'Suspense']);
    }
}
