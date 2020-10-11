<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vendas = Venda::orderBy('nome')->get();
      return view('vendas.index', ['vendas' => $vendas]);

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
      $vendas = Venda::get();
      return view('vendas.create', ['clientes'=>$clientes, 'funcionarios'=> $funcionarios, 'produtos'=>$produtos]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Venda::create($request->all());
      session()->flash('mensagem', 'Cadastrado com sucesso!');
      return redirect()->route('vendas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
      return view('vendas.show', ['venda' => $venda]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
      $clientes = Cliente::get();
      $funcionarios = Funcionario::get();
      $produtos = Produto::get();
      return view('vendas.edit', ['clientes'=>$clientes, 'funcionarios'=> $funcionarios, 'produtos'=>$produtos, 'venda'=>$venda]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
      $venda->fill($request->all());
      $venda->save();

      session()->flash('mensagem', 'Atualizado com sucesso!');
      return redirect()->route('vendas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
      $venda->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
      return redirect()->route('vendas.index');
    }
}
