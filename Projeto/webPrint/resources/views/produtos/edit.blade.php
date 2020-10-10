@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('produtos.update', $produto->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$produto->nome}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="valor" id="labelValor">Valor:</label>
      <input type="float" name="valor" id="valor" value="{{$produto->valor}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="fornecedor_id" id="labelfornecedor_id">Fornecedor:</label>
      <select name="fornecedor_id" id="fornecedor_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($fornecedors as $fornecedor)
        <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
        @endforeach
      </select>
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
