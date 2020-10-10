@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('vendas.update', $venda->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="status" id="labelStatus">Status:</label>
      <input type="text" name="status" id="status" value="{{$venda->status}}" class="form-control">
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
      <input type="number" name="quantidade" id="quantidade" value="{{$venda->quantidade}}" class="form-control">
    </div>


    <div class="form-group">
      <label for="valortotal" id="labelValorTotal">Valor Total:</label>
      <input type="float" name="valortotal" id="valortotal" value="{{$venda->valortotal}}" class="form-control">
    </div>

      <div class="form-group">
        <label for="dataentrega" id="labelData">Data:</label>
        <input type="date" name="dataentrega" id="dataentrega" value="{{$venda->dataentrega}}" class="form-control">
      </div>


      <div>
        <input type="submit" class="btn btn-primary" value="Atualizar">
        <input type="reset" class="btn btn-info "value="Limpar" >
      </div>
    </form>
  </div>

  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
-->
