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
          <th>Sigla</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$estado->id}}</td>
          <td>{{$estado->nome}}</td>
          <td>{{$estado->sigla}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('estados.edit', $estado->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('estados.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('estados.destroy', $estado->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
