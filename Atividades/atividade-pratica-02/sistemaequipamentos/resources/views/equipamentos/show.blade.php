@extends('principal')

@section('conteudo')

<div class="container-flui">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-primary">
        <tr>
          <th>ID</th>
          <th>Nome</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$equipamento->id}}</td>
          <td>{{$equipamento->nome}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('equipamentos.edit', $equipamento->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('equipamentos.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('equipamentos.destroy', $equipamento->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
