@extends('admin.base.base')

@section('conteudo')

<h1 class="my-3">Lista de produtoras</h1>

<table class="table">
    <thead>
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
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection