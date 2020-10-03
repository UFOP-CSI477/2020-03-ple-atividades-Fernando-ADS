@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('users.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="name" id="labelNome">Nome:</label>
      <input type="text" name="name" id="name" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" class="form-control" name="email" id="email" value="">
    </div>

    <div class="form-group">
      <label for="password" id="labelPassword">Password:</label>
      <input type="password" class="form-control" name="password" id="password" value="">
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
