@extends('admin.base.base')

@section('titulo', 'Lista produtoras')

@section('conteudo')

@section('cabecalho', 'Lista produtoras')

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
            <td class="text-center">
            <a href="{{ route('produtoras.show', ['id' => $p->id]) }}" class="btn btn-info">Exibir</a>
                <a href="{{ route('produtoras.edit', ['id' => $p->id]) }}" class="btn btn-warning mx-1">Editar</a>
                <a href="" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody> 
</table>
<div class="d-flex justify-content-center">
    {!! $produtoras->links() !!}
</div>

@endsection