<?php

namespace App\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Docente extends Component
{

    public $expediente, $nip;
    
    public function render()
    {
        return view('livewire.login.docente');
    }

    public function loginDocente()
    {
        $credentials = [
            'expediente' => $this->expediente,
            'password' => $this->nip,  // Usamos 'password' como el campo encriptado
        ];

        if (Auth::guard('docentes')->attempt($credentials)) {
            // Obtener el usuario autenticado
            $docente = Auth::guard('docentes')->user();

            // Redirigir a la vista con los datos del docente
            return redirect()->route('docente-dashboard')->with('docente', $docente);
        } else {
            session()->flash('error', 'Credenciales incorrectas.');
        }
    }

}
