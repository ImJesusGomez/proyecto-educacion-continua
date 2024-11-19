<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Administrativo extends Component
{

  public $name, $password;

  public function render()
  {
    return view('livewire.login.administrativo');
  }

  public function loginAdministrador()
  {
    $credentials = [
      'name' => $this->name,
      'password' => $this->password,  // Usamos 'password' como el campo encriptado
    ];
  }
}
