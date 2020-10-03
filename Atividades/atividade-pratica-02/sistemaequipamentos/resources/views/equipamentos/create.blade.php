@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('equipamentos.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="" class="form-control">
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
