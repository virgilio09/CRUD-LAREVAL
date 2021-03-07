<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">

        <title>@yield('title')</title>

        <!-- Fontes Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css"> 

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

       
    </head>
    <body>
        @yield('content')

        <footer>
            <p>Eventos &copy; 2021</p>
        </footer>
       
    </body>
</html>
