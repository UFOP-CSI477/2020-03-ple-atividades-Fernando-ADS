@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="thead" >
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


      <tbody class="tbody">
        <tr>
          <td>{{$venda->id}}</td>
          <td>
            @if($venda->status == 1)Emitida

            @elseif($venda->status == 2)Pagamento

            @elseif($venda->status == 3)Produção

            @elseif($venda->status == 4)Expedição

            @elseif($venda->status == 5)Finalizada
            @endif</td>
          <td>{{$venda->cliente->nome}}</td>
          <td>{{$venda->funcionario->nome}}</td>
          <td>{{$venda->produto->nome}}</td>
          <td>{{$venda->quantidade}}</td>
          <td>R$ {{$venda->valortotal}}</td>
          <td>{{$venda->dataentrega}}</td>

        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a class="btns" href="{{route('vendas.edit', $venda->id)}}">Editar</a>
  </div>
  <br>
  <div class="container-fluid">
    <a class="btns" href="{{route('vendas.index')}}">Voltar</a>
  </div>

<br>
  <div class="container-fluid">
    <form  name="frmDelete"
    action="{{route('vendas.destroy', $venda->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btns" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
