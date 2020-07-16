@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Detalhes ator', 'rota'=> 'atores.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

<div class="row">
    <div class="col-4 text-center my-auto">
        @if($ator->imagem === null)
        <p> Não há foto </p>
    @else
       <img src='{{ asset('storage/' . $ator->imagem ) }}' alt='Foto do {{$ator->nome}}' class='foto'> 
    @endif
    </div>
    <div class="col-8">
        <b>Nome: </b> {{ $ator->nome }}<hr>
        <b>Idade: </b> {{ $ator->idade}} anos <hr>
        <b>Data de Nascimento: </b> {{ date('d/m/Y', strtotime($ator->data_nascimento)) }} <hr>
        <b>País de origem: </b> {{ $ator->pais->nome }}
    </div>
</div>
<hr>
<div>
    <h1>Biografia</h1> 
    <p>
        {{$ator->biografia}}
    </p>
</div>


@endsection