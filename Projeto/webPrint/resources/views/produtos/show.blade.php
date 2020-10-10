@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-info" >
        <tr>
          <th>Nome</th>
          <th>Valor</th>
          <th>Fornecedor</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$produto->nome}}</td>
          <td>R$ . {{$produto->valor}}</td>
          <td>{{$produto->fornecedor->nome}}</td>

        </tr>

      </tbody>

    </table>
  </div>

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
<!--
Fernando Aparecido da Silva - 1518291
-->
