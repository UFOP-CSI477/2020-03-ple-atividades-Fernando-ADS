@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('clientes.update', $cliente->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF/CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="{{$clientes->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$clientes->nome}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="{{$clientes->telefone}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="{{$clientes->email}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="{{$clientes->endereco}}" class="form-control">
    </div>

  </form>
</div>

@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
