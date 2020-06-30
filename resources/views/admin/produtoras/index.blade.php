@extends('admin.base.base')

@section('titulo', 'Lista produtoras')

@section('conteudo')

@section('cabecalho', 'Lista produtoras')

@if(count($produtoras) <= 0)

<h1>Não há registros</h1>

@else
<a href="{{ route('produtoras.create') }}" class="btn btn-info mb-2">Novo</a>

<table class="table table-bordered table-hover">
    <thead class="bg-dark texto-laranja text-center">
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>História</td>
            <td>Data de Fundação</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($produtoras as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->historiaPR}}</td>
            <td>{{date('d/m/Y', strtotime($p->data_fundacao))}}</td>
            @componenteAcoes(['rota_show' => 'produtoras.show', 'rota_edit' => 'produtoras.edit','id'=> $p->id])
            @endcomponenteAcoes
        </tr>
        @endforeach
    </tbody> 
</table>
  
@componenteModalDeletar(['action' => 'produtoras.delete', 'id' => $p->id])
@endcomponenteModalDeletar

@componentePaginacao(['colecao' => $produtoras])
@endcomponentePaginacao

@endif

@endsection