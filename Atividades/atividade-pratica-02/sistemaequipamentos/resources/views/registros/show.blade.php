@extends('principal')

@section('conteudo')

<div class="container-flui">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-primary">
        <tr>
          <th>Data Limite</th>
          <th>Equipamento</th>
          <th>Usuário</th>
          <th>Tipo</th>
          <th>Descrição</th>

        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$registro->datalimite}}</td>
          <td>{{$registro->equipamento->nome}}</td>

          <td>{{$registro->user->name}}</td>


          @if($registro->tipo == 1)
          <td>PREVENTIVA</td>
          @endif
          @if($registro->tipo == 2)
          <td>CORRETIVA</td>
          @endif
          @if($registro->tipo == 3)
          <td>URGENTE</td>
          @endif
          <td>{{$registro->descricao}}</td>

        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a href="{{route('registros.edit', $registro->id)}}">Editar</a>
  </div>
  <div class="container-fluid">
    <a href="{{route('registros.index')}}">Voltar</a>
  </div>


  <div>
    <form  name="frmDelete"
    action="{{route('registros.destroy', $registro->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
