@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('maquinas.update', $maquina->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$maquina->nome}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="marca" id="labelMarca">Marca:</label>
      <input type="text" name="marca" id="marca" value="{{$maquina->marca}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="fornecedor_id" id="labelfornecedor_id">Forne:</label>
      <select name="fornecedor_id" id="fornecedor_id" class="form-control">
        <option value="{{$maquina->fornecedor->id}}">{{$maquina->fornecedor->nome}}</option>
        @foreach($fornecedors as $fornecedor)
        <option value="{{$fornecedor->id}}">{{$fornecedor->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="valor" id="labelValor">Valor:</label>
      <input type="float" name="valor" id="valor" value="{{$maquina->valor}}" class="form-control">
    </div>

      <div>
        <input type="submit" class="btns" value="Atualizar">
        <input type="reset" class="btns "value="Limpar" >
      </div>
    </form>
  </div>

  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
-->
