<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>FILMOTECA - @yield('titulo')</title>
</head>
<body>

@include('admin.base.navbar')

<div class="row">
    <div class="col-2">
        @include('admin.base.sidebar')
    </div>
    <div class="col-10 cor">
        <div class="container">
            <h1 class="my-3">@yield('cabecalho')</h1>
            <hr>
            @yield('conteudo')
        </div>  
    </div>
</div>
    
@include('admin.base.rodape')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>