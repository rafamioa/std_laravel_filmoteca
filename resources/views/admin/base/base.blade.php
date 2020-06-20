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

    @yield('conteudo')


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>