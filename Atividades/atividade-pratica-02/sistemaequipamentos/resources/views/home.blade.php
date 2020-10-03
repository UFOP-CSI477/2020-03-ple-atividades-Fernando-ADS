@extends('principal')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div align = "center">
                  <img src="https://www.sofis.com.br/wp-content/uploads/2015/10/Seja-bem-vindo.png" width="80%" alt="BVN">

                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
