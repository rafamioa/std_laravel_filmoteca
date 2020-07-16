@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Filmes', 'rota'=> 'filmes.create', 'link' => 'Novo'])
@endcomponenteCabecalho

@if(count($filmes) <= 0)

<h1>Não há registros</h1>

@else

<table class="table table-bordered table-hover">
    <thead class="bg-dark texto-laranja text-center">
        <tr>
            <td>Título</td>
            <td>Data de Lançamento</td>
            <td>Produtora</td>
            <td>País de Origem</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($filmes as $filme)
        <tr>
            <td>{{$filme->titulo}}</td>
            <td>{{date('d/m/Y', strtotime($filme->data_lancamento))}}</td>
            <td>{{$filme->produtora->nome}}</td>
            <td>{{$filme->pais->nome}}</td>          
            @componenteAcoes(['rota_show' => 'filmes.show', 'rota_edit' => 'filmes.edit','id'=> $filme->id])
            @endcomponenteAcoes
        </tr>
        @endforeach
    </tbody> 
</table>
  
@componenteModalDeletar(['action' => 'filmes.delete', 'id' => $filme->id])
@endcomponenteModalDeletar

@componentePaginacao(['colecao' => $filmes])
@endcomponentePaginacao

@endif

@endsection