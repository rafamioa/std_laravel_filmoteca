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
    <h2>Biografia</h2> 
    <p>
        {{$diretor->biografia}}
    </p>
</div>
<hr>

<h2>Diretor em</h2> 
<div class="row">
    @foreach($diretor->filmes as $filme)
    <div class="col-3 my-2 d-flex justify-content-center">     
      <div class="card ">
            <img src="{{ asset('storage/' . $filme->imagem) }}" class="capa" alt="...">
            <div class="card-body">
                <h6 class="card-title font-weigth-bold">{{$filme->titulo}}</h6>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection