@extends('principal')
@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="thead">
        <tr>
          <th>CPF/CNPJ</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
          <th>Exibir</th>
        </tr>
      </thead>


      <tbody class="tbody">

        @foreach($clientes as $e)
        <tr>
          <td>{{$e->cnpj}}</td>
          <td>{{$e->nome}}</td>
          <td>{{$e->telefone}}</td>
          <td>{{$e->email}}</td>
          <td>{{$e->endereco}}</td>
          <td>
            <a href="{{route('clientes.show', $e->id)}}">
              <svg width="1em" style="color:white" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
                <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z"/>
              </svg>
            </a>
          </td>
        </tr>

        @endforeach
      </tbody>

    </table>
  </div>

  <div>
    <a class="btns" href="{{route('clientes.create')}}">Inserir</a>
  </div>


  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
-->
