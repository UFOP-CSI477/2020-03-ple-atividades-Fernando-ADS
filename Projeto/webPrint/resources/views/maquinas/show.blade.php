@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="thead" >
        <tr>
          <th>Nome</th>
          <th>Marca</th>
          <th>Fornecedor</th>
          <th>Valor</th>
        </tr>
      </thead>


      <tbody class="tbody">
        <tr>
          <td>{{$maquina->nome}}</td>
          <td>{{$maquina->marca}}</td>
          <td>{{$maquina->fornecedor->nome}}</td>
          <td>R$ {{$maquina->valor}}</td>
        </tr>

      </tbody>

    </table>
  </div>

  <div class="container-fluid">
    <a class="btns" href="{{route('maquinas.edit', $maquina->id)}}">Editar</a>
  </div>
  <br>
  <div class="container-fluid">
    <a class="btns" href="{{route('maquinas.index')}}">Voltar</a>
  </div>

<br>
  <div class="container-fluid">
    <form  name="frmDelete"
    action="{{route('maquinas.destroy', $maquina->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btns" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
