<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">

      <title>@yield('title')</title>

      <!-- Fontes Google -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
      <!-- CSS da aplicação -->
      <link rel="stylesheet" href="/css/style.css">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Eventos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/events/create">Criar Evento</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Entrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cadastrar</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
          <div class="row">
            @if(session('msg'))
              <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
          </div>
        </div>
      </main>
      <footer>
        <p>Eventos &copy; 2021</p>
      </footer>

      <script src = "https://unpkg.com/ionicons@5.4.0/dist/ionicons.js" ></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
