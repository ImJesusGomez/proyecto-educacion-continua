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

          if (Auth::guard('administrativos')->attempt($credentials)) {
            // Obtener el usuario autenticado
            $administrativo = Auth::guard('administrativos')->user();

              return redirect()->route('administrativo-dashboard')>with('administrativo', $administrativo);
          } else {
              session()->flash('error', 'Credenciales incorrectas.');
          }
      }
}
