@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-info" >
        <tr>
          <th>Data</th>
          <th>Local da Coleta</th>
          <th>Cidade da Coleta</th>
          <th>ID Pessoa</th>
          <th>Nome da Pessoa</th>
          <th>Tipo Sanguíneo</th>

        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$agendamento->data}}</td>

          <td>{{$agendamento->coleta->nome}}</td>
          <td>{{$agendamento->coleta->cidade}}</td>
          <td>{{$agendamento->user->id}}</td>
          <td>{{$agendamento->user->name}}</td>
          <td>{{$agendamento->user->tipo}}</td>
        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a href="{{route('agendamentos.edit', $agendamento->id)}}">Editar</a>
  </div>
  <div class="container-fluid">
    <a href="{{route('agendamentos.index')}}">Voltar</a>
  </div>


  <div>
    <form  name="frmDelete"
    action="{{route('agendamentos.destroy', $agendamento->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
