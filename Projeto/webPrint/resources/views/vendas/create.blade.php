@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <form class="container-fluid " action="{{route('vendas.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="status" id="labelstatus">Status:</label>
      <select name="status" id="status" class="form-control">

        <option value="1">Emitida</option>
        <option value="2">Pagamento</option>
        <option value="3">Produção</option>
        <option value="4">Expedição</option>
        <option value="5">Finalizada</option>
      </select>
    </div>


    <div class="form-group">
      <label for="cliente_id" id="labelcliente_id">Cliente:</label>
      <select name="cliente_id" id="cliente_id" class="form-control">

        @foreach($clientes as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="funcionario_id" id="labelfuncionario_id">Funcionario:</label>
      <select name="funcionario_id" id="funcionario_id" class="form-control">

        @foreach($funcionarios as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="produto_id" id="labelproduto_id">Produto:</label>
      <select name="produto_id" id="produto_id" class="form-control">

        @foreach($produtos as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="quantidade" id="labelQuantidade">Quantidade:</label>
      <input type="number" name="quantidade" id="quantidade" value="" class="form-control" required>
    </div>


    <div class="form-group">
      <label for="valortotal" id="labelValorTotal">Valor Total:</label>
      <input type="number" step=".01"  name="valortotal" id="valortotal" value="" class="form-control" required>
    </div>


    <div class="form-group">
      <label for="dataentrega" id="labelData">Data de Entrega:</label>
      <input type="date" name="dataentrega" id="dataentrega" value="" class="form-control" required>
    </div>


    <div >
      <input type="submit" class="btns" value="Inserir">
      <input type="reset" class="btns "value="Limpar" >
    </div>
  </div>


  <br>


</form>
</div>

@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
