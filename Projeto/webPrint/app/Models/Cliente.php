<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  use HasFactory;
  protected $fillable = ['cnpj', 'nome', 'telefone','email','endereco'];

  public function vendas(){
    return $this->hasMany(Venda::class);
  }

  public function orcamentos(){
    return $this->hasMany(Orcamento::class);
  }
}
