<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Administrativo extends Component
{

  // Vairables para iniciar sesión
  public $name, $password;

  // Variable para mostrar el modal en case de que las credenciales sean incorrectas
  public $loginError = false;

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
    
        // Validamos que las credenciales sean válidas
        if (Auth::guard('administrativos')->attempt($credentials)) {
            // Obtener el usuario autenticado
            $administrativo = Auth::guard('administrativos')->user();
            
            return redirect()->route('administrativo-dashboard')->with('administrativo', $administrativo);
        } else {
            // Mostrar el modal de error
            $this->loginError = true;

            // Reiniciamos los valores
            $this->reset('name', 'password');
        }
  }

  /**
  * Función para cerrar el modal
  */
  public function closeErrorModal() {
        $this->loginError = false;
  }

  
}
