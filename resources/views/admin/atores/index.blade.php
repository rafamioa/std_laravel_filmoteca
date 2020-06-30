@extends('admin.base.base')

@section('conteudo')


@if(count($atores) <= 0)

<h1>Não há registros</h1>

@else

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
            @componenteAcoes(['rota_show' => 'atores.show', 'rota_edit' => 'atores.edit','id'=> $a->id])
            @endcomponenteAcoes
        </tr>
        @endforeach
    </tbody>
</table>

@componenteModalDeletar(['action' => 'atores.delete', 'id' => $a->id])
@endcomponenteModalDeletar

@componentePaginacao(['colecao' => $atores])
@endcomponentePaginacao

@endif

@endsection