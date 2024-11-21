<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Models\Docente;
use App\Models\Curso;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Estudiante extends Component
{
    use WithPagination;

    public $nombre, $expediente, $carrera, $semestre, $nip, $correo;
    public $curso_id, $cursos, $docente_id, $docentes;
    public $searchPro = '';

    public function mount()
    {
        $this->docentes = Docente::all();
        $this->cursos = Curso::all();

        if (!Auth::guard('estudiantes')->check()) {
            return redirect()->route('estudiante-login');
        }
    }

    public function render()
    {
        // Aplicar búsqueda y paginación a los cursos disponibles
        $cursos = Curso::where('nombre', 'like', '%' . $this->searchPro . '%')
            ->orderBy('nombre', 'asc')
            ->paginate(10);

        // Cursos inscritos para el estudiante autenticado
        $cursosInscritos = Curso::whereHas('estudiantes', function ($query) {
            $query->where('estudiantes.id', Auth::guard('estudiantes')->id());
        })
        ->where('nombre', 'like', '%' . $this->searchPro . '%')
        ->orderBy('nombre', 'desc')
        ->paginate(10);

        return view('livewire.dashboard.estudiante', compact('cursos', 'cursosInscritos'));
    }

    public function inscribir($cursoId)
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        $inscrito = DB::table('estudiantes_cursos')
            ->where('estudiante_id', $estudianteId)
            ->where('curso_id', $cursoId)
            ->exists();

        if (!$inscrito) {
            DB::table('estudiantes_cursos')->insert([
                'estudiante_id' => $estudianteId,
                'curso_id' => $cursoId,
                'docente_id' => Curso::find($cursoId)->docente_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            session()->flash('message', 'Te has inscrito exitosamente al curso.');
        } else {
            session()->flash('error', 'Ya estás inscrito en este curso.');
        }
    }

    public function darDeBaja($cursoId)
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        DB::table('estudiantes_cursos')
            ->where('estudiante_id', $estudianteId)
            ->where('curso_id', $cursoId)
            ->delete();

        session()->flash('message', 'Te has dado de baja del curso exitosamente.');
    }

    public function getCursosInscritosProperty()
    {
    $estudianteId = Auth::guard('estudiantes')->id();

    return Curso::whereHas('estudiantes', function ($query) use ($estudianteId) {
        $query->where('estudiantes.id', $estudianteId);
    })->paginate(10); // Ahora está paginado
    }

    //Resetea la pagina para encontrar con searchCat cualquier elemento en cualquier pagina
    public function updated($propertyName){
        if ($propertyName === 'searchPro') {
            $this->resetPage();
        }
    }

    public function updatedSearchPro()
    {
        $this->resetPage();
    }

    public function logout()
{
    Auth::guard('estudiantes')->logout(); // Cerrar sesión del estudiante
    session()->invalidate();             // Invalida la sesión
    session()->regenerateToken();        // Regenera el token CSRF

    return redirect()->route('estudiante-login'); // Redirige al login
}

}
