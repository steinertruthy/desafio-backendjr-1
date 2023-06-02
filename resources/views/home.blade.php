<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Byecar</title>

        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        <link rel="stylesheet" href="{{asset('css/home.css')}}">
    </head>

    <body>
        <header>
            <img src="{{asset('img/logo.png')}}" alt="">
        </header>

        <form id="form" enctype="multipart/form-data">
            <input type="file" id="input-file" />
            <button type="submit">Enviar</button>
        </form>

        <a href="/api/auth/github">
            <img src="{{asset('img/github-icon.svg')}}" alt="">
            Visualizar usuários cadastrados
        </a>

        <script src="{{asset('js/home.js')}}"></script>
    </body>
</html>
