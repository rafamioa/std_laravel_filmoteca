<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmes')->insert([
            'titulo' => 'Os Bons Companheiros',
            'sinopse' => 'Henry Hill (Ray Liotta) conta a sua história de garoto do Brooklyn, Nova York, que sempre  sonhou ser gângster, começando sua "carreira" aos 11 anos e se tornando protegido de  James "Jimmy" Conway (Robert De Niro), um mafioso em ascensão. Tratado como filho por mais de vinte anos, ele se envolve em golpes cada vez maiores e acaba se casando com 
            Karen Hill (Loraine Bracco), sua amante. Impossibilitado de ser totalmente "adotado" pela "família", o jovem ambicioso conquista prestígio, se envolve com o tráfico de drogas, prática grandes roubos e ganha muito dinheiro, mas os agentes federais estão na sua cola e o seu destino pode mudar a qualquer momento.',
            'duracao' => '146',
            'data_lancamento' => '1990-09-09',
            'pais_id' => 2,
            'classificacao_id' => 5,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Os Infiltrados',
            'sinopse' => 'A polícia trava uma verdadeira guerra contra o crime organizado em Boston. Billy Costigan (Leonardo DiCaprio), um jovem policial, recebe a missão de se infiltrar na máfia, mais especificamente no grupo comandado por Frank Costello (Jack Nicholson). Aos poucos Billy conquista sua confiança, ao mesmo tempo em que Colin Sullivan (Matt Damon), um  criminoso que foi infiltrado na polícia como informante de Costello, também ascende dentro  da corporação. Tanto Billy quanto Colin sentem-se aflitos devido à vida dupla que levam,  tendo a obrigação de sempre obter informações. Porém quando a máfia e a polícia  descobrem que entre eles há um espião, a vida de ambos passa a correr perigo. ',
            'duracao' => '151',
            'data_lancamento' => '2006-11-10',
            'pais_id' => 2,
            'classificacao_id' => 5,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Cabo do Medo',
            'sinopse' => 'Max Cady (Robert De Niro), um psicopata que foi preso e condenado por estupro 14 anos  atrás, cumpriu sua pena e agora está livre. Ele pretende se vingar de Sam Bowden (Nick 
            Nolte), seu ex-advogado, que deliberadamente omitiu informações que alterariam a decisão  do júri. Ele pretende agora aterrorizar ao extremo Sam, Leigh Bowden (Jessica Lange), sua            
            mulher, e Danielle (Juliette Lewis), sua filha adolescente, mas pretende fazer isto da forma  mais legal possível, pois enquanto cumpria pena estudou todos os aspectos legais  possíveis.',
            'duracao' => '128',
            'data_lancamento' => '1992-03-27',
            'pais_id' => 2,
            'classificacao_id' => 4,
            'produtora_id' => 2
        ]);
    }
}
