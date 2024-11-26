<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Estudiante extends Component
{

    public $expediente, $nip;

    public $loginError = false;

    public $olvideNip = false;
    
    public function render()
    {
        return view('livewire.login.estudiante');
    }

    public function loginEstudiante()
      {
          $credentials = [
              'expediente' => $this->expediente,
              'password' => $this->nip,  // Usamos 'password' como el campo encriptado
          ];

          if (Auth::guard('estudiantes')->attempt($credentials)) {
              // Obtener el usuario autenticado
              $estudiante = Auth::guard('estudiantes')->user();

              return redirect()->route('estudiante-dashboard')->with('estudiante', $estudiante);
          } else {
                // Mostrar el modal de error
                $this->loginError = true;

                // Reiniciamos los valores
                $this->reset('expediente', 'nip');
          }
      }

    /**
    * Función para cerrar el modal
    */
    public function closeErrorModal() {
            $this->loginError = false;
    }

        /**
    * Función para cerrar el modal
    */
    public function closeOlvideNip() {
            $this->olvideNip = false;
    }

}
