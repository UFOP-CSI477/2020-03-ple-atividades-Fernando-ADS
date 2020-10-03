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
          <th>Estado</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$cidade->id}}</td>
          <td>{{$cidade->nome}}</td>
          <td>{{$cidade->estado->nome}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('cidades.edit', $cidade->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('cidades.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('cidades.destroy', $cidade->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
