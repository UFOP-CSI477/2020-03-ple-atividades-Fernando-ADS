<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Home</title>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand logo" href="{{route('principal')}}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
        </svg>
      WEB
    </a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{route('principal')}}">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('estados.index')}}">Estados</a>
      </li>

    </ul>
  </nav>

  @if(session('mensagem'))
    <div class="alert alert-success">
        {{session('mensagem')}}
    </div>

  @endif


  @yield('conteudo')

</div>



</div>
</body>
</html>
