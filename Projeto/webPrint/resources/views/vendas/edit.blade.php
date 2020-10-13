@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('vendas.update', $venda->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="status" id="labelstatus">Status:</label>
      <select name="status" id="status" class="form-control">
        <option value="" disabled selected>Selecione</option>

        <option value="1"
        @if($venda->status == '1')
          selected
        @endif
        >Emitida</option>

        <option value="2"
        @if($venda->status == '2')
          selected
        @endif
        >Pagamento</option>

        <option value="3"
        @if($venda->status == '3')
          selected
        @endif
        >Produção</option>

        <option value="4"
        @if($venda->status == '4')
          selected
        @endif
        >Expedição</option>

        <option value="5"
        @if($venda->status == '5')
          selected
        @endif
        >Finalizada</option>

      </select>
    </div>


    <div class="form-group">
      <label for="cliente_id" id="labelcliente_id">Cliente:</label>
      <select name="cliente_id" id="cliente_id" class="form-control">
        <option value="{{$venda->cliente->id}}">{{$venda->cliente->nome}}</option>
        @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="funcionario_id" id="labelfuncionario_id">Funcionario:</label>
      <select name="funcionario_id" id="funcionario_id" class="form-control">
        <option value="{{$venda->funcionario->id}}">{{$venda->funcionario->nome}}</option>
        @foreach($funcionarios as $funcionario)
        <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="produto_id" id="labelproduto_id">Produto:</label>
      <select name="produto_id" id="produto_id" class="form-control">
        <option value="{{$venda->produto->id}}">{{$venda->produto->nome}}</option>
        @foreach($produtos as $produto)
        <option value="{{$produto->id}}">{{$produto->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="quantidade" id="labelQuantidade">Quantidade:</label>
      <input type="number" name="quantidade" id="quantidade" value="{{$venda->quantidade}}" class="form-control" required>
    </div>


    <div class="form-group">
      <label for="valortotal" id="labelValorTotal">Valor Total:</label>
      <input type="number" step="any" name="valortotal" id="valortotal"  value="{{$venda->valortotal}}" class="form-control" required>
    </div>

      <div class="form-group">
        <label for="dataentrega" id="labelData">Data:</label>
        <input type="date" name="dataentrega" id="dataentrega" value="{{$venda->dataentrega}}" class="form-control" required>
      </div>


      <div>
        <input type="submit" class="btns" value="Atualizar">
        <input type="reset" class="btns "value="Limpar" >
      </div>
    </form>
  </div>

  @endsection
