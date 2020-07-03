<td class="text-center">
    <a href="{{ route($rota_show, ['id'=>$id]) }}" class="btn btn-info">
      <i class="fa fa-eye"></i>
      Exibir
    </a>
        <a href="{{ route($rota_edit ,['id'=>$id]) }}" class="btn btn-warning mx-1">
          <i class="fa fa-edit"></i>
          Editar
        </a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-close"></i>
            Excluir
        </button>
</td>