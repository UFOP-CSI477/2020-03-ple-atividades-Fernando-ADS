@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('registros.update', $registro->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="equipamentoId" id="labeLEquipamentoID">Equipamento:</label>
      <select name="equipamento_id" id="equipamento_id" class="form-control">
        @foreach($equipamentos as $e)
          <option value="{{$e->id}}"
            @if($registro->equipamento_id == $e->id)
              selected
            @endif
          >{{$e->nome}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="userId" id="labelUserID">Usuário:</label>
      <select name="user_id" id="user_id" class="form-control">
        <option value="{{$registro->equipamento->id}}">{{$registro->user->name}}</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="descricao" id="labelDescricao">Descrição:</label>
      <input type="text" name="descricao" id="descricao" value="{{$registro->descricao}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="datalimite" id="labelDatalimite">Data Limite:</label>
      <input type="date" name="datalimite" id="datalimite" value="{{$registro->datalimite}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="tipo" id="labelTipo">Tipo:</label>

      <input type="number" name="tipo" id="tipo" min="1" max="3" value="{{$registro->tipo}}" class="form-control">
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
