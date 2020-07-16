<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmesGenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // OS BONS COMPANHEIROS
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 1,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 1,
                'genero_id' => 5,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 1,
                'genero_id' => 11,
            ]);

        // OS INFILTRADOS
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 2,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 2,
                'genero_id' => 5,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 2,
                'genero_id' => 11,
            ]);

        // CABO DO MEDO
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 3,
                'genero_id' => 5,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 3,
                'genero_id' => 10,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 3,
                'genero_id' => 11,
            ]);

        // DE OLHOS BEM FECHADOS
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 4,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 4,
                'genero_id' => 11,
            ]);

        // TAXI DRIVER
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 5,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 5,
                'genero_id' => 5,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 5,
                'genero_id' => 11,
            ]);

        // GANGUES DE NOVA YORK
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 6,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 6,
                'genero_id' => 5,
            ]);

        // NASCIDO PARA MATAR
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 7,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 7,
                'genero_id' => 12,
            ]);

        // 2001 UMA ODISSÉIA NO ESPAÇO
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 8,
                'genero_id' => 4,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 8,
                'genero_id' => 11,
            ]);

        // LARANJA MECÂNICA
        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 9,
                'genero_id' => 2,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 9,
                'genero_id' => 4,
            ]);

        DB::table('filmes_generos')
            ->insert([
                'filme_id' => 9,
                'genero_id' => 5,
            ]);
    }
}
