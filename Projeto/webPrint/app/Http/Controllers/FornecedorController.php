<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Maquina;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $fornecedors = Fornecedor::orderBy('nome')->get();
    return view('fornecedors.index', ['fornecedors' => $fornecedors]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('fornecedors.create');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Fornecedor::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('fornecedors.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Fornecedor  $fornecedor
  * @return \Illuminate\Http\Response
  */
  public function show(Fornecedor $fornecedor)
  {
    return view('fornecedors.show', ['fornecedor' => $fornecedor]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Fornecedor  $fornecedor
  * @return \Illuminate\Http\Response
  */
  public function edit(Fornecedor $fornecedor)
  {
    return view('fornecedors.edit', ['fornecedor' => $fornecedor]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Fornecedor  $fornecedor
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Fornecedor $fornecedor)
  {
    $fornecedor->fill($request->all());
    $fornecedor->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('fornecedors.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Fornecedor  $fornecedor
  * @return \Illuminate\Http\Response
  */
  public function destroy(Fornecedor $fornecedor)
  {
    if($fornecedor->produtos->count()>0 || $fornecedor->maquinas->count()>0){
      session()->flash('mensagem', 'Não é permitido excluir! Existem associacões!');
    }

    else {
      $fornecedor->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
    }
    return redirect()->route('fornecedors.index');
  }
}
}
