@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('agendamentos.update', $agendamento->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="userId" id="labelUserID">Usuário:</label>
      <select name="user_id" id="user_id" class="form-control">
        <option value="{{$agendamento->user->id}}">{{$agendamento->user->name}}</option>
        @foreach($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
      </select>
    </div>

    
    <div class="form-group">
      <label for="coletaId" id="labeLColetaID">Coleta:</label>
      <select name="coleta_id" id="coleta_id" class="form-control">
        @foreach($coletas as $e)
        <option value="{{$e->id}}"
          @if($agendamento->coleta_id == $e->id)
          selected
          @endif
          >{{$e->nome}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="data" id="labelData">Data:</label>
        <input type="date" name="data" id="data" value="{{$agendamento->data}}" class="form-control">
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
