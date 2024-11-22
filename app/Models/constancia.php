<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constancia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
