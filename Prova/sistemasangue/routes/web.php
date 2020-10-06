<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Models\Agendamento;
use App\Http\Controllers\ColetaController;
use App\Http\Controllers\UserController;

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


Route::get('consulta', function () {
  $agendamentos = Agendamento::orderBy('data','desc')->get();
  return view('consulta', ['agendamentos' => $agendamentos]);
})->name('consulta');


/*
Route::get('consulta', function () {
  $agendamentos = Agendamento::orderByDesc(Agendamento::select('data')->whereColumn('pessoa_id','id')->orderBy('name', 'asc')->limit(1))->get();
  return view('consulta', ['agendamentos' => $agendamentos]);
})->name('consulta');
*/

Route::resource('/users', UserController::class)->middleware('auth');
Route::resource('/agendamentos', AgendamentoController::class)->middleware('auth');
Route::resource('/coletas', ColetaController::class)->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
