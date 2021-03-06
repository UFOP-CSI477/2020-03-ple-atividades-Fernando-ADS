@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-danger">
        <tr>
          <th>Nome</th>
          <th>Cidade</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$coleta->nome}}</td>
          <td>{{$coleta->cidade}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('coletas.edit', $coleta->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('coletas.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('coletas.destroy', $coleta->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
