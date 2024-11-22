<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Docente extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function cursos (){
        return $this->hasMany(Curso:: class);
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

