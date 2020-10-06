<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agendamento;
use App\Models\Coleta;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $users = User::orderBy('name')->get();
    return view('users.index', ['users' => $users]);//
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('users.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    User::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('users.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\User  $user
  * @return \Illuminate\Http\Response
  */
  public function show(User $user)
  {
    return view('users.show', ['user' => $user]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\User  $user
  * @return \Illuminate\Http\Response
  */
  public function edit(User $user)
  {
    return view('users.edit', ['user' => $user]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\User  $user
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, User $user)
  {
    $user->fill($request->all());
    $user->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('users.index');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\User  $user
  * @return \Illuminate\Http\Response
  */
  public function destroy(User $user)
  {
    if($user->agendamentos->count()>0){
      session()->flash('mensagem', 'Não é permitido excluir! Existem associações!');
    }

    else {
      $user->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
    }
    return redirect()->route('users.index');
  }
}
