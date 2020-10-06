@extends('principal')
@section('conteudo')

<div class="container-flui">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-danger">
        <tr>
          <th>Data</th>
          <th>Local da Coleta</th>
          <th>Cidade da Coleta</th>
          <th>ID Pessoa</th>
          <th>Nome da Pessoa</th>
          <th>Tipo Sanguíneo</th>

      <tbody class="table-light table-sm">

        @foreach($agendamentos as $e)
        <tr>
          <td>{{$e->data}}</td>
          <td>{{$e->coleta->nome}}</td>
          <td>{{$e->coleta->cidade}}</td>
          <td>{{$e->user->id}}</td>
          <td>{{$e->user->name}}</td>
          <td>{{$e->user->tipo}}</td>

        </tr>

        @endforeach
      </tbody>

    </table>
  </div>

  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
  -->
