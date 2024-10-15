<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Estudiante extends Authenticatable
{
    use HasFactory;

    protected $table = 'estudiantes'; 
    

    protected $guarded = []; 

    // Relación con la tabla 'cursos'
    public function curso(){
        return $this->belongsToMany(Curso::class);
    }

    public function getAuthPassword(){
      return $this->nip;  // Especifica que el campo 'nip' se utilizará como la contraseña
    }
}
