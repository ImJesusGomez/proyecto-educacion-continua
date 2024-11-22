<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use App\Models\Curso;
use Livewire\WithPagination;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Estudiante extends Component
{
    use WithPagination;

    public $nombre, $expediente, $carrera, $semestre, $nip, $correo;
    public $curso_id, $searchPro = '', $searchCurso = '';

    // Variable para decir que ya estas inscrito
    public $openInscrito = false;

    // Variable para decir que el curso esta lleno
    public $openLleno = false;

    // Variable para decir que el curso esta lleno
    public $openBaja = false;

    // Variable para decir que el curso esta lleno
    public $openExito = false;

    // Variable para abrir el perfil
    public $abrirPerfil = false;

    // Variable para abrir el ajustes
    public $abrirAjustes = false;

    // Variable para abrir el ayuda
    public $abrirAyuda = false;

    // Variable para abrir el ajustes
    public $abrirInfo = false;

    public function mount()
    {
        if (!Auth::guard('estudiantes')->check()) {
            return redirect()->route('estudiante-login');
        }
    }

    public function render()
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        // Cursos disponibles
        $cursos = Curso::where('nombre', 'like', '%' . $this->searchCurso . '%')
            ->orderBy('id', 'desc')
            ->paginate(5, pageName: 'pageCursos');

        // Cursos en los que el estudiante ya está inscrito
        $cursosInscritos = Curso::whereHas('estudiantes', function ($query) use ($estudianteId) {
            $query->where('estudiantes.id', $estudianteId);
        })
            ->where('nombre', 'like', '%' . $this->searchPro . '%')
            ->orderBy('nombre', 'desc')
            ->paginate(10);

        return view('livewire.dashboard.estudiante', compact('cursos', 'cursosInscritos'));
    }

    public function inscribir($cursoId)
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        // Verificar si el estudiante ya está inscrito
        $inscrito = DB::table('estudiantes_cursos')
            ->where('estudiante_id', $estudianteId)
            ->where('curso_id', $cursoId)
            ->exists();

        if ($inscrito) {
            $this->openInscrito = true;
            return;
        }

        // Verificar el cupo del curso
        $curso = Curso::find($cursoId);

        if (!$curso) {
            session()->flash('error', 'El curso no existe.');
            return;
        }

        $estudiantesInscritos = $curso->estudiantes()->count();

        if ($estudiantesInscritos >= $curso->cupo_max) {
            $this->openLleno = true;
            return;
        }

        // Inscribir al estudiante
        $curso->estudiantes()->attach($estudianteId, [
            'docente_id' => $curso->docente_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->openExito = true;
    }

    public function darDeBaja($cursoId)
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        $curso = Curso::find($cursoId);

        if (!$curso) {
            session()->flash('error', 'El curso no existe.');
            return;
        }

        $curso->estudiantes()->detach($estudianteId);

        $this->openBaja = true;
    }

    public function getCursosInscritosProperty()
    {
        $estudianteId = Auth::guard('estudiantes')->id();

        return Curso::whereHas('estudiantes', function ($query) use ($estudianteId) {
            $query->where('estudiantes.id', $estudianteId);
        })->paginate(10);
    }

    public function updated($propertyName)
    {
        if (in_array($propertyName, ['searchPro', 'searchCurso'])) {
            $this->resetPage();
        }
    }

    public function logout()
    {
        Auth::guard('estudiantes')->logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('estudiante-login');
    }

    public $cursoSeleccionado;

    public function mostrarInfoCurso($cursoId)
    {
        $this->abrirInfo = true;
        $this->cursoSeleccionado = Curso::find($cursoId);
    }

    public function closeInscrito(){
      $this->openInscrito = false;
    }

    public function closeLleno(){
      $this->openLleno = false;
    }

    public function closeBaja(){
      $this->openBaja = false;
    }

    public function closeExito(){
      $this->openExito = false;
    }

    public function closeInfo(){
      $this->cursoSeleccionado = '';
    }

    public function abrirperfil(){
        $this->abrirPerfil = true;
    }
    public function abrirajustes(){
        $this->abrirAjustes = true;
    }
    public function abrirayuda(){
        $this->abrirAyuda = true;
    }
    public function abririnfo(){
        $this->abrirInfo = true;
    }
}
