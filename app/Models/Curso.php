<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function constancias()
    {
        return $this->hasMany(Constancia::class);
    }

    public function docente()
    {
        return $this->belongsTo(Docente::class);
    }

    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'estudiantes_cursos', 'curso_id', 'estudiante_id');
    }

}
