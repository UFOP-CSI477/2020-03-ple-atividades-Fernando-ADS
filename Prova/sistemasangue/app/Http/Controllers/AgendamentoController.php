<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Coleta;
use App\Models\User;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //$agendamentos = Agendamento::orderBy('nome')->get();
    $agendamentos = Agendamento::get();
    return view('agendamentos.index', ['agendamentos' => $agendamentos]);//
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $users = User::get();
    $coletas = Coleta::get();
    return view('agendamentos.create', ['users'=>$users, 'coletas'=> $coletas]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Agendamento::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('agendamentos.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Agendamento  $agendamento
  * @return \Illuminate\Http\Response
  */
  public function show(Agendamento $agendamento)
  {
    return view('agendamentos.show', ['agendamento' => $agendamento]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Agendamento  $agendamento
  * @return \Illuminate\Http\Response
  */
  public function edit(Agendamento $agendamento)
  {
    $users = User::get();
    $coletas = Coleta::get();
    return view('agendamentos.edit', ['users' => $users, 'coletas' => $coletas , 'agendamento' => $agendamento]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Agendamento  $agendamento
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Agendamento $agendamento)
  {
    $agendamento->fill($request->all());
    $agendamento->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('agendamentos.index');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Agendamento  $agendamento
  * @return \Illuminate\Http\Response
  */
  public function destroy(Agendamento $agendamento)
  {
    $agendamento->delete();
    session()->flash('mensagem', 'Excluído com sucesso!');
    return redirect()->route('agendamentos.index');
  }
}
