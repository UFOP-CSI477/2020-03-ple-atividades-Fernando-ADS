<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
  use HasFactory;
  protected $fillable = ['nome','marca','fornecedor_id','valor'];

  public function fornecedor(){
    return $this->belongsTo(Fornecedor::class);
  }

}
