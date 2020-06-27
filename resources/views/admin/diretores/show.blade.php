@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

<div class="row">
    <div class="col-11">
        <h1>Detalhes diretor: <b>{{ $diretor->nome }}</b></h1>
    </div>
    <div class="col-1">
        <a href="{{ route('diretores.index') }}" class="btn btn-info ml-auto">Voltar</a>
    </div>
</div>
<hr>

<b>Foto: </b><br>
@if($diretor->imagem === null)
    <p> Não há foto </p>
@else
   <img src='{{ asset('storage/' . $diretor->imagem ) }}' alt='Foto do {{$diretor->nome}}' class='foto'> 
@endif
<hr>
<b>Nome: </b><p> {{ $diretor->nome }}</p><hr>
<b>Biografia: </b><p> {{ $diretor->biografia }}</p><hr>
<b>Idade: </b><p> {{ $diretor->idade}} anos</p><hr>
<b>Data de Nascimento: </b><p> {{ date('d/m/Y', strtotime($diretor->data_nascimento)) }}</p><hr>
<b>País de origem: </b><p> {{ $diretor->pais->nome }}</p><hr>







@endsection