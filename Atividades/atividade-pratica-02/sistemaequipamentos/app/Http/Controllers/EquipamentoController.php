<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Equipamento;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $equipamentos = Equipamento::orderBy('nome')->get();
      return view('equipamentos.index', ['equipamentos' => $equipamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      if(Auth::check()){
        return view('equipamentos.create');
      }
      else {
        session()->flash('mensagem', 'Usuário não autorizado!');
        return redirect()->route('login');
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::check()){
        Equipamento::create($request->all());
        session()->flash('mensagem', 'Cadastrado com sucesso!');
        return redirect()->route('equipamentos.index');
      }
      else {
        session()->flash('mensagem', 'Usuário não autorizado!');
        return redirect()->route('login');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamento $equipamento)
    {
        return view('equipamentos.show', ['equipamento' => $equipamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamento $equipamento)
    {
      if(Auth::check()){
        return view('equipamentos.edit', ['equipamento' => $equipamento]);  //
        }
      else {
        session()->flash('mensagem', 'Usuário não autorizado!');
        return redirect()->route('login');
      }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamento $equipamento)
    {
      if(Auth::check()){

              $equipamento->fill($request->all());
              $equipamento->save();

              session()->flash('mensagem', 'Atualizado com sucesso!');
              return redirect()->route('equipamentos.index');        }
      else {
        session()->flash('mensagem', 'Usuário não autorizado!');
        return redirect()->route('login');
      }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamento  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamento $equipamento)
    {

      if(Auth::check()){

              if($equipamento->registros->count()>0){
                session()->flash('mensagem', 'Não é permitido excluir! Existem associacões!');
              }

              else {
                $equipamento->delete();
                session()->flash('mensagem', 'Excluído com sucesso!');
              }
              return redirect()->route('equipamentos.index');}
      else {
        session()->flash('mensagem', 'Usuário não autorizado!');
        return redirect()->route('login');
      }






    }
    }
