<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['nome','valor','fornecedor_id'];

public function orcamento(){
  return $this->belongsTo(Orcamento::class);
}

public function venda(){
  return $this->belongsTo(Venda::class);
}
public function fornecedor(){
  return $this->belongsTo(Fornecedor::class);
}
}
