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
          <th>Unidade de Medida</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$produto->id}}</td>
          <td>{{$produto->nome}}</td>
          <td>{{$produto->um}}</td>
        </tr>

      </tbody>

    </table>
  </div>


<!--
<h1>Dados do produto</h1>
<p>Id:{{$produto->id}}</p>
<p>Nome:{{$produto->nome}}</p>
<p>Unidade de Medida:{{$produto->um}}</p>
-->
<div class="container-fluid">
  <a href="{{route('produtos.edit', $produto->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('produtos.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('produtos.destroy', $produto->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
