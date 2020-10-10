@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-info" >
        <tr>
          <th>ID</th>
          <th>Status</th>
          <th>Cliente</th>
          <th>Funcionario</th>
          <th>Produto</th>
          <th>Quantidade</th>
          <th>Valor Total</th>

        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$orcamento->id}}</td>
          <td>{{$orcamento->status}}</td>
          <td>{{$orcamento->cliente->nome}}</td>
          <td>{{$orcamento->funcionario->nome}}</td>
          <td>{{$orcamento->produto->nome}}</td>
          <td>{{$orcamento->quantidade}}</td>
          <td>{{$orcamento->valortotal}}</td>
        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a href="{{route('orcamentos.edit', $orcamento->id)}}">Editar</a>
  </div>
  <div class="container-fluid">
    <a href="{{route('orcamentos.index')}}">Voltar</a>
  </div>


  <div>
    <form  name="frmDelete"
    action="{{route('orcamentos.destroy', $orcamento->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
