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

        DB::table('filmes')->insert([
            'titulo' => 'De Olhos Bem Fechados',
            'sinopse' => 'Bill Harford (Tom Cruise) é casado com a curadora de arte Alice (Nicole Kidman). Ambos vivem o casamento perfeito até que, logo após uma festa, Alice confessa que sentiu atração por outro homem no passado e que seria capaz de largar Bill e sua filha por ele. A confissão desnorteia o sujeito, que sai pelas ruas de Nova York assombrado com a imagem da mulher nos braços de outro. Ele acaba em meio a uma reunião secreta e uma mansão afastada.',
            'duracao' => '159',
            'data_lancamento' => '1999-09-03',
            'pais_id' => 2,
            'classificacao_id' => 5,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Taxi Driver',
            'sinopse' => 'Travis Bickle (Robert DeNiro) é um jovem veterano do Vietnã, que volta para as ruas de Nova York trabalhando como motorista de táxi. Conhecendo melhor todos os podres das vielas da cidade, seu caminho se cruza com o das jovens Betsy (Cybill Sheperd) e Iris (Jodie Foster), uma prostituta de apenas 12 anos, o que o faz se revoltar com tudo e com todos, explodindo sua raiva e violência que sempre demonstrou ter.',
            'duracao' => '113',
            'data_lancamento' => '1976-03-22',
            'pais_id' => 2,
            'classificacao_id' => 5,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Gangues de Nova York',
            'sinopse' => 'Em plena Nova York de 1840, o jovem Amsterdam (Leonardo DiCaprio) busca se vingar de William "The Butcher" Cutting (Daniel Day-Lewis), o assassino de seu pai (Liam Neeson), que era o líder da gangue Dead Rabbits. Em sua jornada Amsterdam acaba se tornando amigo e homem de confiança de William, apaixonando-se também por Jenny Everdane (Cameron Diaz), uma bela jovem que é integrante de uma gangue rival.',
            'duracao' => '167',
            'data_lancamento' => '2003-02-07',
            'pais_id' => 2,
            'classificacao_id' => 4,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Nascido Para Matar',
            'sinopse' => 'Um sargento (R. Lee Ermey) treina de forma fanática e sádica os recrutas em uma base de treinamentos, na intenção de transformá-los em máquinas de guerra para combater na Guerra do Vietnã. Após serem transformados em fuzileiros navais, eles são enviados para a guerra, e quando lá chegam, se deparam com seus horrores.',
            'duracao' => '116',
            'data_lancamento' => '1987-10-16',
            'pais_id' => 2,
            'classificacao_id' => 4,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => '2001: Uma Odisseia no Espaço',
            'sinopse' => 'Desde a “Aurora do Homem” (a pré-história), um misterioso monólito negro parece emitir sinais de outra civilização interferindo no nosso planeta. Quatro milhões de anos depois, no século XXI, uma equipe de astronautas liderados pelo experiente David Bowman (Keir Dullea) e Frank Poole (Gary Lockwood) é enviada a Júpiter para investigar o enigmático monólito na nave Discovery, totalmente controlada pelo computador HAL 9000.',
            'duracao' => '148',
            'data_lancamento' => '1968-04-29',
            'pais_id' => 2,
            'classificacao_id' => 1,
            'produtora_id' => 2
        ]);

        DB::table('filmes')->insert([
            'titulo' => 'Laranja Mecânica',
            'sinopse' => 'Em uma desolada Inglaterra do futuro, a violência das gangues juvenis impera, provocando um clima de terror.
            Alex (Malcolm McDowell) lidera uma das gangues e, após praticar vários crimes, é preso e submetido à reeducação pelo Estado, com base em uma técnica de reflexos condicionados.
            Quando ele volta à sua vida em liberdade, é perseguido por aqueles que foram suas vítimas, Mr. Alexander (Patrick Magee) e sua esposa.',
            'duracao' => '136',
            'data_lancamento' => '1971-12-19',
            'pais_id' => 2,
            'classificacao_id' => 4,
            'produtora_id' => 2
        ]);
    }
}
