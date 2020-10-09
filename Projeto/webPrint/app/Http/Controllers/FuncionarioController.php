<?php

namespace App\Http\Controllers;

use App\Models\Orcamento;
use App\Models\Venda;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $funcionarios = Funcionario::orderBy('nome')->get();
    return view('funcionarios.index', ['funcionarios' => $funcionarios]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('funcionarios.create');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Funcionario::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('funcionarios.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Funcionario  $funcionario
  * @return \Illuminate\Http\Response
  */
  public function show(Funcionario $funcionario)
  {
    return view('funcionarios.show', ['funcionario' => $funcionario]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Funcionario  $funcionario
  * @return \Illuminate\Http\Response
  */
  public function edit(Funcionario $funcionario)
  {
    return view('funcionarios.edit', ['funcionario' => $funcionario]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Funcionario  $funcionario
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Funcionario $funcionario)
  {
    $funcionario->fill($request->all());
    $funcionario->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('funcionarios.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Funcionario  $funcionario
  * @return \Illuminate\Http\Response
  */
  public function destroy(Funcionario $funcionario)
  {
    if($funcionario->vendas->count()>0  || $funcionario->orcamentos->count()>0){
      session()->flash('mensagem', 'Não é permitido excluir! Existem associacões!');
    }

    else {
      $funcionario->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
    }
    return redirect()->route('funcionarios.index');
  }
}
}
