@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('cidades.update', $cidade->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$cidade->nome}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="estadoId" id="labelEstadoID">Estado:</label>
      <select name="estado_id" id="estado_id" class="form-control">
        @foreach($estados as $e)
          <option value="{{$e->id}}"
            @if($cidade->estado_id == $e->id)
              selected
            @endif
          >{{$e->nome}}</option>
        @endforeach
      </select>
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
