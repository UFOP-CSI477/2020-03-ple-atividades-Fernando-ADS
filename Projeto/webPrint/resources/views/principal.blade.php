<!DOCTYPE html>
<html lang="br" dir="ltr">
<head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/styles.css">

  <title>WebPrint</title>
</head>
<body>
  <div class="fundo" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand logo" href="{{route('home')}}">

        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103z"/>
  </svg>
        WebPrint
      </a>

      <ul class="nav navbar-nav" >

        <li class="nav-item ">
          <a class="nav-link" href="{{route('funcionarios.index')}}">Funcionários</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('fornecedors.index')}}">Fornecedores</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('clientes.index')}}">Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('vendas.index')}}">Vendas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('orcamentos.index')}}">Orçamentos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('produtos.index')}}">Produtos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('maquinas.index')}}">Máquinas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('sobre')}}">Sobre nós</a>
        </li>

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

<!--
  <div >
    <img src="/img/logo.png" alt="logo" id="logopos">
  </div>
-->


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
