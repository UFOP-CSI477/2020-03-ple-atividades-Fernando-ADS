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
      <label for="um" id="labelUM">Unidade de Medida:</label>
      <input type="text" class="form-control" name="um" id="um" value="{{$produto->um}}">
    </div>

    <br>

    <div>
      <input type="submit" class="btn btn-primary" value="Atualizar">
      <input type="reset" class="btn btn-info "value="Limpar" >
    </div>
  </form>
</div>

@endsection
