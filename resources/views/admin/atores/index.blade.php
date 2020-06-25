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
            <a href="{{ route('atores.show',['id'=>$a->id]) }}" class="btn btn-info">Exibir</a>
                <a href="{{ route('atores.edit',['id'=>$a->id]) }}" class="btn btn-warning mx-1">Editar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Excluir
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><b>Tem certeza que deseja fazer a exclusão?</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Atenção! Não será possível recuperar os dados em caso se exclusão. Clique em sim para confirmar a exclusão. 
          Caso contrário, clique em cancelar para não executar a operação.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        <form action="{{ route('atores.delete', ['id' => $a->id]) }}" method="POST">
            @method('DELETE') @csrf
        <input type="hidden" name="id" value="{{$a->id}}" />
          <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
        </div>
      </div>
    </div>
  </div>

<div class="d-flex justify-content-center">
    {!! $atores->links() !!}
</div>

@endsection