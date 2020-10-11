<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Produto;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $orcamentos = Orcamento::orderBy('nome')->get();
    return view('orcamentos.index', ['orcamentos' => $orcamentos]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $clientes = Cliente::get();
    $funcionarios = Funcionario::get();
    $produtos = Produto::get();
    return view('orcamentos.create', ['clientes'=>$clientes, 'funcionarios'=> $funcionarios, 'produtos'=>$produtos]);

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Orcamento::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('orcamentos.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Orcamento  $orcamento
  * @return \Illuminate\Http\Response
  */
  public function show(Orcamento $orcamento)
  {
    return view('orcamentos.show', ['orcamento' => $orcamento]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Orcamento  $orcamento
  * @return \Illuminate\Http\Response
  */
  public function edit(Orcamento $orcamento)
  {
    $clientes = Cliente::get();
    $funcionarios = Funcionario::get();
    $produtos = Produto::get();
    $orcamentos = Orcamento::get();
    return view('orcamentos.edit', ['clientes'=>$clientes, 'funcionarios'=> $funcionarios, 'produtos'=>$produtos, 'orcamento'=>$orcamento]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Orcamento  $orcamento
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Orcamento $orcamento)
  {
    $orcamento->fill($request->all());
    $orcamento->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('orcamentos.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Orcamento  $orcamento
  * @return \Illuminate\Http\Response
  */
  public function destroy(Orcamento $orcamento)
  {
    $orcamento->delete();
    session()->flash('mensagem', 'Excluído com sucesso!');
    return redirect()->route('orcamentos.index');
  }
}
