@extends('principal')
@section('conteudo')

<div>
  <a href="{{route('registros.create')}}">Inserir</a>
</div>

<div class="container-flui">
  <div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="text-align:center">
      <br>
      <thead class="table-primary">
        <tr>
          <th>Data Limite</th>
          <th>Equipamento</th>
          <th>Usuário</th>
          <th>Tipo</th>
          <th>Descrição</th>


       <th>Exibir</th>
        </tr>
      </thead>


      <tbody class="table-light table-sm">

        @foreach($registros as $e)
        <tr>
          <td>{{$e->datalimite}}</td>
          <td>{{$e->equipamento->nome}}</td>
          <td>{{$e->user->name}}</td>

                @if($e->tipo == 1)
                  <td>PREVENTIVA</td>
                @endif
                @if($e->tipo == 2)
                  <td>CORRETIVA</td>
                @endif
                @if($e->tipo == 3)
                  <td>URGENTE</td>
                @endif
                    <td>{{$e->descricao}}</td>

          <td>
            <a href="{{route('registros.show', $e->id)}}">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
            </a>
          </td>
        </tr>

        @endforeach
      </tbody>

    </table>
  </div>
  @endsection
  <!--
  Fernando Aparecido da Silva - 1518291
  -->
