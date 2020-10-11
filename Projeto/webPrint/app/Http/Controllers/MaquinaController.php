<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $maquinas = Maquina::orderBy('nome')->get();
    return view('maquinas.index', ['maquinas' => $maquinas]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $fornecedors = Fornecedor::get();
    $maquinas = Maquina::get();
    return view('maquinas.create', ['fornecedors'=>$fornecedors, 'maquinas'=> $maquinas]);

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Maquina::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('maquinas.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Maquina  $maquina
  * @return \Illuminate\Http\Response
  */
  public function show(Maquina $maquina)
  {
    return view('maquinas.show', ['maquina' => $maquina]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Maquina  $maquina
  * @return \Illuminate\Http\Response
  */
  public function edit(Maquina $maquina)
  {
    $fornecedors = Fornecedor::get();
    return view('maquinas.edit', ['fornecedors' => $fornecedors, 'maquina' => $maquina]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Maquina  $maquina
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Maquina $maquina)
  {
    $maquina->fill($request->all());
    $maquina->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('maquinas.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Maquina  $maquina
  * @return \Illuminate\Http\Response
  */
  public function destroy(Maquina $maquina)
  {
    $maquina->delete();
    session()->flash('mensagem', 'Excluído com sucesso!');
    return redirect()->route('maquinas.index');
  }
}
