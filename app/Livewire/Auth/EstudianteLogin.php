<?php
namespace App\Livewire\Auth;

use App\Models\Estudiante;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EstudianteLogin extends Component
{
    public $expediente;
    public $nip;

    public function render()
    {
        return view('livewire.auth.estudiante-login');
    }

    public function login()
    {
        $this->validate([
            'expediente' => 'required|string',
            'nip' => 'required|string',
        ]);

        // Intentar obtener el estudiante con las credenciales proporcionadas
        $estudiante = Estudiante::where('expediente', $this->expediente)
            ->where('nip', $this->nip)
            ->first();

        if ($estudiante) {
            Auth::login($estudiante); // Inicia sesión al estudiante
            return redirect()->route('estudiante-dashboard'); // Redirige a la página de inicio
        } else {
            session()->flash('error', 'Las credenciales proporcionadas son incorrectas.');
            return redirect()->route('estudiante-login'); // Redirige al login en caso de fallo
        }
    }

}
