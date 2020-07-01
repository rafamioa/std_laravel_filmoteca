@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Detalhes filme', 'rota'=> 'filmes.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

<div class="row">
    <div class="col-4 text-center my-auto">
        @if($filme->imagem === null)
        <p> Não há foto </p>
    @else
       <img src='{{ asset('storage/' . $filme->imagem ) }}' alt='Foto do {{$filme->nome}}' class='produtora-logo'> 
    @endif
    </div>
    <div class="col-8">
        <b>Título: </b> {{ $filme->titulo }}<hr>
        <b>Data de Lançamento: </b> {{ date('d/m/Y', strtotime($filme->data_lancamento)) }} <hr>
        <b>Duração: </b> {{ $filme->duracao }} minutos<hr>
        <b>Produtora: </b> {{ $filme->produtora->nome }} <hr>
        <b>Classificação Indicativa: </b> {{ $filme->classificacao->tipo }} <hr>
        <b>Produtora: </b> {{ $filme->produtora->nome }} <hr>
        <b>País de origem: </b> {{ $filme->pais->nome }} <hr>
        <b>Data de Lançamento: </b> {{ date('d/m/Y', strtotime($filme->data_lancamento)) }}
    </div>
</div>
<hr>
<div>
    <h1>Sinopse</h1> 
    <p>
        {{$filme->sinopse}}
    </p>
</div>

@endsection