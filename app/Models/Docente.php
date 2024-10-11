<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function curso (){
        return $this->hasMany(Curso:: class);
    }
}
