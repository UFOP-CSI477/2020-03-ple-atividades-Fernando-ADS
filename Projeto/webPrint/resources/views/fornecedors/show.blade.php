@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-danger">
        <tr>
          <th>CNPJ</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Endereço</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$fornecedor->cnpj}}</td>
          <td>{{$fornecedor->nome}}</td>
          <td>{{$fornecedor->telefone}}</td>
          <td>{{$fornecedor->email}}</td>
          <td>{{$fornecedor->endereco}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('fornecedors.edit', $fornecedor->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('fornecedors.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('fornecedors.destroy', $fornecedor->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
