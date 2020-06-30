@extends('admin.base.base')

@section('titulo', 'Detalhes ator')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Detalhes diretor', 'rota'=> 'diretores.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

<div class="row">
    <div class="col-4 text-center my-auto">
        @if($diretor->imagem === null)
        <p> Não há foto </p>
    @else
       <img src='{{ asset('storage/' . $diretor->imagem ) }}' alt='Foto do {{$diretor->nome}}' class='foto'> 
    @endif
    </div>
    <div class="col-8">
        <b>Nome: </b> {{ $diretor->nome }}<hr>
        <b>Idade: </b> {{ $diretor->idade}} anos <hr>
        <b>Data de Nascimento: </b> {{ date('d/m/Y', strtotime($diretor->data_nascimento)) }} <hr>
        <b>País de origem: </b> {{ $diretor->pais->nome }}
    </div>
</div>
<hr>
<div>
    <h1>Biografia</h1> 
    <p>
        {{$diretor->biografia}}
    </p>
</div>











@endsection