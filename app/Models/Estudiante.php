<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Estudiante extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function cursos(){
        return $this->belongsToMany(Curso::class);
    }

    public function recibos(){
      return $this->hasMany(Recibo::class);
    }
    
    public function getAuthPassword()
    {
      return $this->nip;
    }

    public function setNipAttribute($value)
    {
        $this->attributes['nip'] = Hash::make($value);  // Usar Hash::make() en lugar de bcrypt
    }
}
