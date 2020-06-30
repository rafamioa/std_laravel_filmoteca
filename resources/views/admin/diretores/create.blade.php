@extends('admin.base.base')

@section('conteudo')

@componenteCabecalho(['titulo' => 'Cadastrar diretor', 'rota'=> 'diretores.index', 'link' => 'Voltar'])
@endcomponenteCabecalho

@componenteMensagemValidacao
@endcomponenteMensagemValidacao

<form action="{{ route('diretores.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="nome" class="font-weight-bold">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Informe o nome completo" value={{old('nome')}}>
    </div>
    <div class="form-group">
        <label for="nome" class="font-weight-bold">Biografia</label>
        <textarea name="biografia" id="" cols="30" rows="5" class="form-control" placeholder="Informe a biografia">{{old('biografia')}}</textarea>
    </div>

    <div class="row">
        <div class="form-group col-3">
            <label for="" class="font-weight-bold">Idade</label>
            <input type="number" class="form-control" name="idade" step="1" placeholder="Informe a idade" value={{old('idade')}}>
        </div>
        <div class="form-group col-3">
            <label for="data_nascimento" class="font-weight-bold">Data de Nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" value={{old('data_nascimento')}}>
        </div>
        <div class="form-group col-3">
            <label for="pais" class="font-weight-bold">País de Origem</label>
            <select name="pais_id" class="form-control" value={{old('pais_id')}}>
                @foreach($paises as $p)
                <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach
            </select>
        </div> 
        @componenteUpload @endcomponenteUpload
    </div>
    @componenteBotaoCadastrar @endcomponenteBotaoCadastrar

</form>

@endsection