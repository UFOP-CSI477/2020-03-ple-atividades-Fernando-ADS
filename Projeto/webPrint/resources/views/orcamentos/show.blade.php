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

        </tr>
      </thead>


      <tbody class="tbody">
        <tr>
          <td>{{$orcamento->id}}</td>
          <td>
            @if($orcamento->status == 1)Emitido

            @elseif($orcamento->status == 2)Aprovado

            @elseif($orcamento->status == 3)Reprovado

            @endif</td>
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
    <a class="btns" href="{{route('orcamentos.edit', $orcamento->id)}}">Editar</a>
  </div>
  <br>
  <div class="container-fluid">
    <a class="btns" href="{{route('orcamentos.index')}}">Voltar</a>
  </div>
  <br>

  <div class="container-fluid">
    <form  name="frmDelete"
    action="{{route('orcamentos.destroy', $orcamento->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btns" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
