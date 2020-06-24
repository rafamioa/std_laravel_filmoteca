<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtoras')->insert(['nome' => 'Netflix', 'historia' => 'Netflix é uma provedora global de filmes e séries de televisão via streaming sediada em Los Gatos, Califórnia, e que atualmente possui mais de 160 milhões de assinantes. Fundada em 1997 nos Estados Unidos, a empresa surgiu como um serviço de entrega de DVD pelo correio. ', 'data_fundacao' => '1997-08-29']);
        DB::table('produtoras')->insert(['nome' => 'Warner Bros. Entertainment', 'historia' => 'A Warner Bros. Entertainment., também conhecida como Warner Bros. Pictures ou simplesmente Warner Bros. é uma produtora e distribuidora estadunidense de filmes e entretenimento televisivo. Foi fundada em 4 de abril de 1923 pelos irmãos Warner.', 'data_fundacao' => '1923-04-04']);
        DB::table('produtoras')->insert(['nome' => 'Sony Pictures Entertainment', 'historia' => 'Sony Pictures Entertainment Inc. é uma empresa norte-americana de entretenimento com sede em Culver City, Califórnia, Estados Unidos. Ela pertence a Sony Entertainment, conglomerado de mídia e entretenimento com sede em Nova York e que pertence a multinacional japonesa Sony Corporation. ', 'data_fundacao' => '1987-12-21']);
        DB::table('produtoras')->insert(['nome' => 'MGM', 'historia' => 'Metro-Goldwyn-Mayer Inc., ou MGM, é uma empresa norte-americana de comunicação de massa, envolvida principalmente com produção e distribuição de filmes e programas televisivos.', 'data_fundacao' => '1924-04-17']);
    }
}
