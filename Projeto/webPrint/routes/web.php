<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('principal');
})->name('principal');


Route::resource('/funcionarios', FuncionarioController::class);
Route::resource('/fornecedors', FornecedorController::class);
Route::resource('/clientes', ClienteController::class);
Route::resource('/produtos', ProdutoController::class);
Route::resource('/vendas', VendaController::class);
Route::resource('/orcamentos', OrcamentoController::class);
Route::resource('/maquinas', MaquinaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
