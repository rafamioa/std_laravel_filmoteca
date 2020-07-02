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
        DB::table('diretores')->insert([
            'nome' => 'Steven Spielberg',
            'biografia'=> 'É um cineasta,produtor cinematográfico,roteirista e empresário norte-americano. Spielberg é o diretor que mais filmes tem na lista dos 100 Melhores Filmes de Todos os Tempos,feita pelo American Film Institute. ',
            'idade'=> 73,
            'data_nascimento' => '1946-12-18',
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
        ]);

        DB::table('diretores')->insert([
            'nome' => 'Stanley Kubrick',
            'biografia' => 'Stanley Kubrick foi um dos grandes gênios da história do cinema. Fez filmes de diversos gêneros (drama,
            comédia, terror, ficção científica, guerra e noir). Todos os seus filmes trazem uma visão irônica e pessimista a respeito do ser humano. ',
            'idade'=> 70,
            'data_nascimento' => '1928-07-26',
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
         ]);

        DB::table('diretores')->insert([
            'nome' => 'Martin Scorsese',
            'biografia' => 'Críticos e estudiosos do cinema chamam-lhe de "o maior diretor americano vivo"; vários dos seus filmes ocupam lugar de destaque nas listas dos melhores filmes do "American Film Institute" e na lista dos 250 melhores da Internet Movie Database.',
            'idade'=> 77,
            'data_nascimento' => '1942-11-17',
            'data_falecimento' => null,
            'pais_id'=> 2,
            'sexo_id' => 2,
         ]);
    }
}
