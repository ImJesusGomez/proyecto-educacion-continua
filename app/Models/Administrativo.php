<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrativo extends Authenticatable
{
  use HasFactory;

  protected $guarded = [];

  public function getAuthPassword()
  {
    return $this->password;
  }

  public function setPasswordAttribute($value)
  {
    $this->attributes['password'] = Hash::make($value);  // Usar Hash::make() en lugar de bcrypt
  }
}
