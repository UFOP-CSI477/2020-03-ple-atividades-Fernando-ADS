@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('cidades.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="estado_id" id="labelEstadoID">Estado:</label>
      <!--
      <input type="text" class="form-control" name="estado_id" id="estado_id" value="">
      -->
      <select name="estado_id" id="estado_id" class="form-control">
        @foreach($estados as $e)
          <option value="{{$e->id}}">{{$e->nome}}</option>

        @endforeach
      </select>


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
