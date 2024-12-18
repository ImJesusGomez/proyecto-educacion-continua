<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function constancia()
    {
        return $this->hasMany(Constancia::class);
    }

    public function curso()
    {
        return $this->belongsToMany(Curso::class);
    }
}
