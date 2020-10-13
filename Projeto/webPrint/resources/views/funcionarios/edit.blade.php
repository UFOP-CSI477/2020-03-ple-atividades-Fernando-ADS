@extends('principal')

@section('conteudo')
<div class="container-fluid">
  <form class="container-fluid " action="{{route('funcionarios.update', $funcionario->id)}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="cnpj" id="labelCnpj">CPF:</label>
      <input type="text" name="cnpj" id="cnpj" value="{{$funcionario->cnpj}}" class="form-control" maxlength="11" required>
    </div>

    <div class="form-group">
      <label for="nome" id="labelNome">Nome:</label>
      <input type="text" name="nome" id="nome" value="{{$funcionario->nome}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="tipo" id="labelTipo">Tipo:</label>
      <input type="number"  min="1" max="4" name="tipo" id="tipo" required disabled value="{{$funcionario->tipo}}" class="form-control">
    </div>

    <div class="form-group">
      <label for="telefone" id="labelTelefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" value="{{$funcionario->telefone}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email" id="labelEmail">Email:</label>
      <input type="text" name="email" id="email" value="{{$funcionario->email}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="password" id="labelSenha">Senha:</label>
      <input type="password" name="password" id="password" value="{{$funcionario->password}}" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="endereco" id="labelEndereco">Endereço:</label>
      <input type="text" name="endereco" id="endereco" value="{{$funcionario->endereco}}" class="form-control" required>
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
