@extends('admin.base.base')

@section('conteudo')

<h1>Artistas</h1>

<table class="table table-bordered table-hover">
    <thead class="bg-dark texto-laranja text-center">
        <tr>
            <td>Nome</td>
            <td>Biografia</td>
            <td>Idade</td>
            <td>Data de Nascimento</td>
            <td>País de Origem</td>
            <td>Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($atores as $a)
        <tr>
            <td>{{$a->nome}}</td>
            <td>{{$a->biografiaFMT}}</td>
            <td>{{$a->idade}}</td>
            <td>{{date('d/m/Y', strtotime($a->data_nascimento))}}</td>
            <td>{{$a->pais->nome}}</td>
            <td class="text-center">
                <a href="" class="btn btn-info">Exibir</a>
                <a href="" class="btn btn-warning mx-1">Editar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Excluir
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {!! $atores->links() !!}
</div>

@endsection