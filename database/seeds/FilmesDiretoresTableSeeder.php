<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesDiretoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 1,
            'diretor_id' => 3 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 2,
            'diretor_id' => 3 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 3,
            'diretor_id' => 3 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 4,
            'diretor_id' => 2 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 5,
            'diretor_id' => 3 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 6,
            'diretor_id' => 3 
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 7,
            'diretor_id' => 2
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 8,
            'diretor_id' => 2
        ]);

        DB::table('filmes_diretores')
        ->insert([
            'filme_id' => 9,
            'diretor_id' => 2
        ]);
    }
}
