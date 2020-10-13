@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('produtos.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="valor" id="labelValor">Valor:</label>
      <input type="float" name="valor" id="valor" value="" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="fornecedor_id" id="labelfornecedor_id">Fornecedor:</label>
      <select name="fornecedor_id" id="fornecedor_id" class="form-control">

        @foreach($fornecedors as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>

    <div>
      <input type="submit" class="btns" value="Inserir">
      <input type="reset" class="btns "value="Limpar" >
  </div>


  <br>


  </div>
</form>
</div>

@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
