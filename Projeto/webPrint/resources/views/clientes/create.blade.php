@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('clientes.store')}}" method="post">

    @csrf

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF/CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="" class="form-control">
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="" class="form-control">
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
