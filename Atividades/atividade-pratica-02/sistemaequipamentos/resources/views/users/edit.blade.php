@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('users.update', $user->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name" id="labelNome">Nome:</label>
      <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
    </div>

    <div class="form-group">
      <label for="password" id="labelPassword">Password:</label>
      <input type="text" class="form-control" name="password" id="password" value="{{$user->password}}">
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
