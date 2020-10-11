<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Models\Venda;
use App\Models\Orcamento;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $produtos = Produto::orderBy('nome')->get();
    return view('produtos.index', ['produtos' => $produtos]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $fornecedors = Fornecedor::get();
    $produtos = Produto::get();
    return view('produtos.create', ['fornecedors'=>$fornecedors, 'produtos'=> $produtos]);

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    Produto::create($request->all());
    session()->flash('mensagem', 'Cadastrado com sucesso!');
    return redirect()->route('produtos.index');

  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\Produto  $produto
  * @return \Illuminate\Http\Response
  */
  public function show(Produto $produto)
  {
    return view('produtos.show', ['produto' => $produto]);

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\Produto  $produto
  * @return \Illuminate\Http\Response
  */
  public function edit(Produto $produto)
  {
    $fornecedors = Fornecedor::get();
    return view('produtos.edit', ['fornecedors' => $fornecedors, 'produto' => $produto]);

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\Produto  $produto
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, Produto $produto)
  {
    $produto->fill($request->all());
    $produto->save();

    session()->flash('mensagem', 'Atualizado com sucesso!');
    return redirect()->route('produtos.index');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\Produto  $produto
  * @return \Illuminate\Http\Response
  */
  public function destroy(Produto $produto)
  {

    if($produto->vendas->count()>0 || $produto->orcamentos->count()>0 ){
      session()->flash('mensagem', 'Não é permitido excluir! Existem associacões!');
    }

    else {
      $produto->delete();
      session()->flash('mensagem', 'Excluído com sucesso!');
    }
    return redirect()->route('produtos.index');


/*
  $produto->delete();
  session()->flash('mensagem', 'Excluído com sucesso!');
  return redirect()->route('produtos.index');
*/
}
}
