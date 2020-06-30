@extends('admin.base.base')

@section('conteudo')

<div class="row">
  <div class="col-11">
      <h1>Diretores</h1>
  </div>
  <div class="col-1">
      <a href="{{ route('diretores.create') }}" class="btn btn-danger">
        <i class="fa fa-plus"> </i>
        Novo
      </a>
  </div>
</div>
<hr>

@if(count($diretores) < 1)
<h2> Não há registros</h2>
@else
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
        @foreach($diretores as $diretor)
        <tr>
            <td>{{$diretor->nome}}</td>
            <td>{{$diretor->biografiaFMT}}</td>
            <td>{{$diretor->idade}}</td>
            <td>{{date('d/m/Y', strtotime($diretor->data_nascimento))}}</td>
            <td>{{$diretor->pais->nome}}</td>
            <td class="text-center">
            <a href="{{ route('diretores.show',['id'=>$diretor->id]) }}" class="btn btn-info">
              <i class="fa fa-search-plus"></i>
              Exibir
            </a>
                <a href="{{ route('diretores.edit',['id'=>$diretor->id]) }}" class="btn btn-warning mx-1">
                  <i class="fa fa-edit"></i>
                  Editar
                </a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-close"></i>
                    Excluir
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@componenteModalDeletar(['action' => 'diretores.delete', 'id' => $diretor->id])
@endcomponenteModalDeletar

@componentePaginacao(['colecao' => $diretores])
@endcomponentePaginacao

@endif

@endsection