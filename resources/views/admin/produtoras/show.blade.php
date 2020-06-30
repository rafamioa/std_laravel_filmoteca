@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Detalhes produtora', 'rota'=> 'produtoras.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

<div class="row">
    <div class="col-4 text-center my-auto">
        @if($produtora->imagem === null)
        <p> Não há foto </p>
    @else
       <img src='{{ asset('storage/' . $produtora->imagem ) }}' alt='Foto do {{$produtora->nome}}' class='produtora-logo'> 
    @endif
    </div>
    <div class="col-8">
        <b>Nome: </b> {{ $produtora->nome }}<hr>
        <b>Data de Fundação: </b> {{ date('d/m/Y', strtotime($produtora->data_fundacao)) }} <hr>
    </div>
</div>
<hr>
<div>
    <h1>História</h1> 
    <p>
        {{$produtora->historia}}
    </p>
</div>











@endsection