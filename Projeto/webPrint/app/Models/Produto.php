<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome','valor','fornecedor_id'];

public function orcamento(){
  return $this->hasMany(Orcamento::class);
}

public function vendas(){
  return $this->hasMany(Venda::class);
}
public function fornecedor(){
  return $this->belongsTo(Fornecedor::class);
}
}
