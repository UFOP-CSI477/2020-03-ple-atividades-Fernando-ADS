@extends('principal')

@section('conteudo')

<div class="container-fluid">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-primary">
        <tr>
          <th>Nome</th>
          <th>Tipo Sanguíneo</th>
          <th>Email</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->tipo}}</td>
          <td>{{$user->email}}</td>
        </tr>

      </tbody>

    </table>
  </div>

<div class="container-fluid">
  <a href="{{route('users.edit', $user->id)}}">Editar</a>
</div>
<div class="container-fluid">
  <a href="{{route('users.index')}}">Voltar</a>
</div>


<div>
  <form  name="frmDelete"
  action="{{route('users.destroy', $user->id)}}" method="post" onsubmit="return confirm('Deseja exlcuir?')">

    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-link" value="Excluir">
  </form>
</div>


@endsection
<!--
Fernando Aparecido da Silva - 1518291
-->
