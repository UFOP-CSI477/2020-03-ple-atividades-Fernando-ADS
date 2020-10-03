@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('equipamentos.update', $equipamento->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$equipamento->nome}}" class="form-control">
    </div>

    <br>

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
