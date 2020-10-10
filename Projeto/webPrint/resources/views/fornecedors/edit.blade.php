@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('fornecedors.update', $coleta->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF/CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="{{$fornecedors->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$fornecedors->nome}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="{{$fornecedors->telefone}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="{{$fornecedors->email}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="{{$fornecedors->endereco}}" class="form-control">
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
