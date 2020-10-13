<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\MaquinaController;
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
/*
Route::get('/', function () {
    return view('principal');
})->name('principal');
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');

Route::resource('/funcionarios', FuncionarioController::class)->middleware('auth');
Route::resource('/fornecedors', FornecedorController::class)->middleware('auth');
Route::resource('/clientes', ClienteController::class)->middleware('auth');
Route::resource('/produtos', ProdutoController::class)->middleware('auth');;
Route::resource('/vendas', VendaController::class)->middleware('auth');
Route::resource('/orcamentos', OrcamentoController::class)->middleware('auth');
Route::resource('/maquinas', MaquinaController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
