<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Administrativo extends Component
{

    public $currentSection = 'estudiantes';

    public function changeSection($section)
    {
        $this->currentSection = $section;
    }

    public function mount() {
          if (!Auth::guard('administrativos')->check()) {
              return redirect()->route('administrativo-login');
          }
    }

    public function render(){
          return view('livewire.dashboard.administrativo');
    }

    public function logout() {
          Auth::guard('administrativos')->logout();  // Cierra la sesión para el guard 'administrativos'
          return redirect()->route('administrativo-login');  // Redirige al usuario a la página de inicio de sesión
    }

}
