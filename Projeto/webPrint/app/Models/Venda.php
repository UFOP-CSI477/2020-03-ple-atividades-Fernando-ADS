<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $fillable = ['status','cliente_id','funcionario_id','produto_id','quantidade','valortotal','dataentrega'];

    public function funcionario(){
      return $this->belongsTo(Funcionario::class);
    }

    public function produto(){
      return $this->belongsTo(Produto::class);
    }

    public function cliente(){
      return $this->belongsTo(Cliente::class);
    }
}
