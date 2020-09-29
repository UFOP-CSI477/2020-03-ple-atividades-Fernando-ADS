@extends('principal')
@section('conteudo')
<div class="container-flui">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-light">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Unidade de Medida</th>
        </tr>
      </thead>


      <tbody class="table-primary table-sm">

        @foreach($produtos as $e)
          <tr>
            <td>{{$e->id}}</td>
            <td>{{$e->nome}}</td>
            <td>{{$e->um}}</td>
          </tr>

        @endforeach
      </tbody>

    </table>
  </div>
@endsection
