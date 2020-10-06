<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Coleta;
//use App\Moldels\User;

class Agendamento extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','coleta_id','data'];

    public function coleta(){
      return $this->belongsTo(Coleta::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

}
