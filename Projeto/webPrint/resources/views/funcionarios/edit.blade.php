@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('funcionarios.update', $funcionario->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF:</label>
      <input type="text" name="cnpj" id="cnpj" value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="tipo" id="labelTipo">Tipo:</label>
      <input type="number"  min="1" max="4" name="tipo" id="tipo" disabled value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="senha" id="labelSenha">Senha:</label>
      <input type="password" name="senha" id="senha" value="{{$funcionarios->cnpj}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="{{$funcionarios->cnpj}}" class="form-control">
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
