@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="thead">
        <tr>
          <th>CPF/CNPJ</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
        </tr>
      </thead>


      <tbody class="tbody">
        <tr>
          <td>{{$cliente->cnpj}}</td>
          <td>{{$cliente->nome}}</td>
          <td>{{$cliente->telefone}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente->endereco}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a class="btns" href="{{route('clientes.edit', $cliente->id)}}">Editar</a>
</div>
<br>
<div class="container-fluid">

  <a class="btns" href="{{route('clientes.index')}}">Voltar</a>
</div>

<br>
<div class="container-fluid">
  <form  name="frmDelete"
  action="{{route('clientes.destroy', $cliente->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btns" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
