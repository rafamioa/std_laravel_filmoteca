@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Detalhes produtora: <b>{{ $produtora->nome }}</b></h1>
    </div>
    <div class="col-1">
        <a href="{{ route('produtoras.index') }}" class="btn btn-danger ml-auto">
            <i class="fa fa-arrow-left"> </i>
            Voltar
        </a>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-4 text-center my-auto">
        @if($produtora->imagem === null)
        <p> Não há foto </p>
    @else
       <img src='{{ asset('storage/' . $produtora->imagem ) }}' alt='Foto do {{$produtora->nome}}' class='foto'> 
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