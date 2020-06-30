@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Editar produtora', 'rota'=> 'produtoras.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

@componenteMensagemValidacao
@endcomponenteMensagemValidacao

<form action="{{ route('produtoras.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
<input type="hidden" name="id" value={{$produtora->id}} class="form-control">
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
    <input type="text" name="nome" class="form-control {{($errors->has('nome') ? 'is-invalid' : '' )}}" placeholder="Digite o nome da produtora" value={{ $produtora->nome }}>
        <div class="invalid-feedback">
           {{$errors->first('nome')}}
        </div>
    </div>
    <div class="form-group">
        <label for="historia" class="font-weight-bold">História</label>
        <textarea name="historia" id="" cols="30" rows="5" class="form-control {{($errors->has('historia') ? 'is-invalid' : '' )}}" placeholder="Informe a breve história à produtora">{{$produtora->historia}}
        </textarea>
        <div class="invalid-feedback">
            {{$errors->first('historia')}}
         </div>
    </div>
    <div class="row">
        <div class="form-group col-3">
            <label for="data_fundacao" class="font-weight-bold">Data de Fundação</label>
            <input type="date" name="data_fundacao" id="data_fundacao" class="form-control {{($errors->has('data_fundacao') ? 'is-invalid' : '' )}}" value={{$produtora->data_fundacao}}>
            <div class="invalid-feedback">
                {{$errors->first('data_fundacao')}}
            </div>
        </div>
        @componenteUpload @endcomponenteUpload
    </div>
    @componenteBotaoAtualizar @endcomponenteBotaoAtualizar

</form>

@endsection