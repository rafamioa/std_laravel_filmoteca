@extends('admin.base.base')

@section('titulo', 'Detalhes produtora')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Detalhes produtora <b>{{ $produtora->nome }}</b></h1>
    </div>
    <div class="col-1">
        <a href="{{ route('produtoras.index') }}" class="btn btn-info ml-auto">Voltar</a>
    </div>
</div>
<hr>

<b>Nome: </b><p> {{ $produtora->nome }}</p><hr>
<b>História: </b><p> {{ $produtora->historia }}</p><hr>
<b>Data de Fundação: </b><p> {{ date('d/m/Y'), strtotime($produtora->data_fundacao) }}</p><hr>




@endsection