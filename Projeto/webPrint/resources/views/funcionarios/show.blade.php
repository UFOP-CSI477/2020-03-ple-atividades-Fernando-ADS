@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="thead">
        <tr>
          <th>CPF</th>
          <th>Nome</th>
          <th>Tipo</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
        </tr>
      </thead>


      <tbody class="tbody">
        <tr>
          <td>{{$funcionario->cnpj}}</td>
          <td>{{$funcionario->nome}}</td>
          <td>{{$funcionario->tipo}}</td>
          <td>{{$funcionario->telefone}}</td>
          <td>{{$funcionario->email}}</td>
          <td>{{$funcionario->endereco}}</td>

        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a class="btns" href="{{route('funcionarios.edit', $funcionario->id)}}">Editar</a>
</div>

<br>

<div class="container-fluid">
  <a class="btns" href="{{route('funcionarios.index')}}">Voltar</a>
</div>

<br>
<div class="container-fluid">
  <form  name="frmDelete"
  action="{{route('funcionarios.destroy', $funcionario->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btns" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
