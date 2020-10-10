@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('orcamentos.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="status" id="labelStatus">Status:</label>
      <input type="text" name="status" id="status" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="cliente_id" id="labelcliente_id">Cliente:</label>
      <select name="cliente_id" id="cliente_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($clientes as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="funcionario_id" id="labelfuncionario_id">Funcionario:</label>
      <select name="funcionario_id" id="funcionario_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($funcionarios as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="produto_id" id="labelproduto_id">Produto:</label>
      <select name="produto_id" id="produto_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($produtos as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="quantidade" id="labelQuantidade">Quantidade:</label>
      <input type="number" name="quantidade" id="quantidade" value="" class="form-control">
    </div>


    <div class="form-group">
      <label for="valortotal" id="labelValorTotal">Valor Total:</label>
      <input type="float" name="valortotal" id="valortotal" value="" class="form-control">
    </div>


  </div>


  <br>

  <div>
    <input type="submit" class="btn btn-success" value="Inserir">
    <input type="reset" class="btn btn-primary "value="Limpar" >
  </div>
</form>
</div>

@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
