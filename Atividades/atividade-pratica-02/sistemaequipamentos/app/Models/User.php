<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['name', 'email','password'];

    public function registros(){
        return $this->hasMany(Registro::class);
    }
}
