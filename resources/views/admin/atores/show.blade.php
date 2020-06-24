@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Detalhes ator: <b>{{ $ator->nome }}</b></h1>
    </div>
    <div class="col-1">
        <a href="{{ route('atores.index') }}" class="btn btn-info ml-auto">Voltar</a>
    </div>
</div>
<hr>

<b>Nome: </b><p> {{ $ator->nome }}</p><hr>
<b>Biografia: </b><p> {{ $ator->biografia }}</p><hr>
<b>Idade: </b><p> {{ $ator->idade}} anos</p><hr>
<b>Data de Nascimento: </b><p> {{ date('d/m/Y', strtotime($ator->data_nascimento)) }}</p><hr>
<b>País de origem: </b><p> {{ $ator->pais->nome }}</p><hr>







@endsection