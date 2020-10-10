@extends('principal')
@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-info">
        <tr>
          <th>ID</th>
          <th>Status</th>
          <th>Cliente</th>
          <th>Funcionario</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor Total</th>

       <th>Exibir</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">

        @foreach($orcamentos as $e)
        <tr>
          <td>{{$e->id}}</td>
          <td>{{$e->status}}</td>
          <td>{{$e->cliente->nome}}</td>
          <td>{{$e->funcionario->nome}}</td>
          <td>{{$e->produto->nome}}</td>
          <td>{{$e->quantidade}}</td>
          <td>{{$e->valortotal}}</td>

          <td>
            <a href="{{route('orcamentos.show', $e->id)}}">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
            </a>
          </td>
        </tr>

        @endforeach
      </tbody>

    </table>

      <div class="container-fluid">
        <a href="{{route('orcamentos.create')}}">Inserir</a>
      </div>

  </div>


  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
  -->
