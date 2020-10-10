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
          <th>Data de Entrega</th>

        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$venda->id}}</td>
          <td>{{$venda->status}}</td>
          <td>{{$venda->cliente->nome}}</td>
          <td>{{$venda->funcionario->nome}}</td>
          <td>{{$venda->produto->nome}}</td>
          <td>{{$venda->quantidade}}</td>
          <td>{{$venda->valortotal}}</td>
          <td>{{$venda->dataentrega}}</td>

        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a href="{{route('vendas.edit', $venda->id)}}">Editar</a>
  </div>
  <div class="container-fluid">
    <a href="{{route('vendas.index')}}">Voltar</a>
  </div>


  <div>
    <form  name="frmDelete"
    action="{{route('vendas.destroy', $venda->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
