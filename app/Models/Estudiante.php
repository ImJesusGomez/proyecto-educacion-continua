<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes'; 

    protected $guarded = [];

    public function curso (){
        return $this->belongsToMany(Curso:: class);
    }

    public function getAuthPassword(){
      return $this->nip;  // Especifica que el campo 'nip' se utilizará como la contraseña
    }
}
