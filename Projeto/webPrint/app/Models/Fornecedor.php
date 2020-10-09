<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = ['cnpj', 'nome','telefone','email','endereco'];

    public function produtos(){
      return $this->hasMany(Produto::class);
    }

    public function maquinas(){
      return $this->hasMany(Maquina::class);
    }
}
