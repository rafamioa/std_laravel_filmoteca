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
        <h1 class="my-3">@yield('cabecalho')</h1>
        <div class="dropdown-divider mb-3"></div>
        @yield('conteudo')
    </div>
</div>
    
@include('admin.base.rodape')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>