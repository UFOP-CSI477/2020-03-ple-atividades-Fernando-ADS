<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Home</title>
</head>
<body style="background-color:#ffbfaa">
  <div >
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #cc0000; border-color: #000;">
      <a class="navbar-brand logo" href="{{route('home')}}" style="color:#ffbfaa">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-medical-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 2l.5-2.5 3 3L10 5a1 1 0 0 1-1-1zM6.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L5 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L7 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
        </svg>
        HealthBlood
      </a>
      <ul class="nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" style="color:#FFF">Área Geral</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('consulta')}}">Agendamentos</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" style="color:#FFF">Área Administrativa</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('users.index')}}">Pessoas</a>
            <a class="dropdown-item" href="{{route('coletas.index')}}">Coletas</a>
            <a class="dropdown-item" href="{{route('agendamentos.index')}}">Agendamentos</a>
          </div>
        </li>

        @guest
        <li class="nav-item">
          <a class="nav-link" style="color:#FFF" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" style="color:#FFF" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" style="color:#FFF" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </nav>

  @if(session('mensagem'))
  <div class="alert alert-success">
    {{session('mensagem')}}
  </div>
  @endif
  @yield('conteudo')

  <div align="center">
    <img width="20%" src="https://www.camaravacaria.rs.gov.br/uploads/img_noticias/20170405_162212_doe-sangue.png" alt="logo">

  </div>



</div>



</div>
</body>
</html>
