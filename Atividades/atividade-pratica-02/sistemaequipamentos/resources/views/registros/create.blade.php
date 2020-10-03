@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('registros.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="equipamento_id" id="labelequipamento_id">Equipamento:</label>
      <select name="equipamento_id" id="equipamento_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($equipamentos as $e)
          <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
        </select>
    </div>


    <div class="form-group">
      <label for="user_id" id="labelUser_id">Usuário:</label>
      <select name="user_id" id="user_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($users as $u)
          <option value="{{$u->id}}">{{$u->name}}</option>
        @endforeach
            </select>
    </div>

    <div class="form-group">
      <label for="descricao" id="labelDescricao">Descrição:</label>
      <input type="text" name="descricao" id="descricao" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="datalimite" id="labelDatalimite">Data Limite:</label>
      <input type="date" name="datalimite" id="datalimite" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="tipo" id="labelTipo">Tipo:</label>
      <input type="number" name="tipo" id="tipo" value="" min="1", max="3" class="form-control">

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
