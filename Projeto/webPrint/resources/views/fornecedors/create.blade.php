@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('agendamentos.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="user_id" id="labelUser_id">Pessoa:</label>
      <select name="user_id" id="user_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($users as $u)
        <option value="{{$u->id}}">{{$u->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="coleta_id" id="labelcoleta_id">Local da Coleta:</label>
      <select name="coleta_id" id="coleta_id" class="form-control">
        <option disabled selected value="0">Selecione</option>
        @foreach($coletas as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group">
      <label for="data" id="labelData">Data:</label>
      <input type="date" name="data" id="data" value="" class="form-control">
    </div>

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
