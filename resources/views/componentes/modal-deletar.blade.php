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

        <form action="{{ route($action, ['id' => $id]) }}" method="POST">
            @method('DELETE') @csrf
        <input type="hidden" name="id" value="{{$id}}" />
          <button type="submit" class="btn btn-success">Confirmar</button>
        </form>
        </div>
      </div>
    </div>
  </div>