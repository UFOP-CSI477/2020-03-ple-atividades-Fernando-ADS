<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Vendas;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $clientes = Cliente::orderBy('nome')->get();
    return view('clientes.index', ['clientes' => $clientes]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('clientes.create');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Cliente::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('clientes.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Cliente  $cliente
  * @return \Illuminate\Http\Response
  */
  public function show(Cliente $cliente)
  {
    return view('clientes.show', ['cliente' => $cliente]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Cliente  $cliente
  * @return \Illuminate\Http\Response
  */
  public function edit(Cliente $cliente)
  {
    return view('clientes.edit', ['cliente' => $cliente]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Cliente  $cliente
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Cliente $cliente)
  {
    $cliente->fill($request->all());
    $cliente->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('clientes.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Cliente  $cliente
  * @return \Illuminate\Http\Response
  */
  public function destroy(Cliente $cliente)
  {
    if($cliente->vendas->count()>0){
      session()->flash('mensagem', 'Não é permitido excluir! Existem associacões!');
    }

    else {
      $cliente->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
    }
    return redirect()->route('clientes.index');
  }
}
