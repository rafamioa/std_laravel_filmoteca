@extends('admin.base.base')

@section('conteudo')

<h1 class="my-3">Lista de produtoras</h1>

<table class="table table-bordered table-hover">
    <thead class="bg-dark texto-laranja">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtoras as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>
                <a href="" class="btn btn-info">Exibir</a>
                <a href="" class="btn btn-warning">Editar</a>
                <a href="" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection