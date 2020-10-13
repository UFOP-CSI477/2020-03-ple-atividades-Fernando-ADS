@extends('principal')

@section('conteudo')
<div class="container-fluid">

  <form class="container-fluid " action="{{route('fornecedors.update', $fornecedor->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF/CNPJ:</label>
      <input type="text" name="cnpj" id="cnpj" value="{{$fornecedor->cnpj}}" maxlength="11" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="{{$fornecedor->telefone}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="{{$fornecedor->email}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="{{$fornecedor->endereco}}" class="form-control" required>
    </div>

    <br>

    <div>
      <input type="submit" class="btns" value="Atualizar">
      <input type="reset" class="btns "value="Limpar" >
    </div>
  </form>
</div>

@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
