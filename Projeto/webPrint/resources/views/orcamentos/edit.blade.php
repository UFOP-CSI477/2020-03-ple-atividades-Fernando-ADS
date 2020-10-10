@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('orcamentos.update', $orcamento->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="status" id="labelStatus">Status:</label>
      <input type="text" name="status" id="status" value="{{$orcamento->status}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="cliente_id" id="labelcliente_id">Cliente:</label>
      <select name="cliente_id" id="cliente_id" class="form-control">
        <option value="{{$orcamento->cliente->id}}">{{$orcamento->cliente->nome}}</option>
        @foreach($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="funcionario_id" id="labelfuncionario_id">Funcionario:</label>
      <select name="funcionario_id" id="funcionario_id" class="form-control">
        <option value="{{$orcamento->funcionario->id}}">{{$orcamento->funcionario->nome}}</option>
        @foreach($funcionarios as $funcionario)
        <option value="{{$funcionario->id}}">{{$funcionario->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="produto_id" id="labelproduto_id">Produto:</label>
      <select name="produto_id" id="produto_id" class="form-control">
        <option value="{{$orcamento->produto->id}}">{{$orcamento->produto->nome}}</option>
        @foreach($produtos as $produto)
        <option value="{{$produto->id}}">{{$produto->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="quantidade" id="labelQuantidade">Quantidade:</label>
      <input type="number" name="quantidade" id="quantidade" value="{{$orcamento->quantidade}}" class="form-control">
    </div>


    <div class="form-group">
      <label for="valortotal" id="labelValorTotal">Valor Total:</label>
      <input type="float" name="valortotal" id="valortotal" value="{{$orcamento->valortotal}}" class="form-control">
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
