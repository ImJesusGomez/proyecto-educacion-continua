<?php

namespace App\Livewire\Dashboard;

use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Docente extends Component
{
    public $nombre;
    public $cupo_max;
    public $horario;
    public $link;
    public $duracion;
    public $fecha_inicio;
    public $fecha_fin;
    public $descripcion;
    public $fecha_pago;
    public $costo;
    public $docente_id;

    public $id;
    public $nombreD;
    public $expediente;
    public $correo;
    public $telefono;

    public $mCreate = false;
    public $mEdit = false;
    public $abrirPerfil = false;
    public $abrirAjustes = false;
    public $abrirAyuda = false;
    public $idEditable;
    public $cursoEdit = [
        'id' => '',
        'nombre' => '',
        'cupo_max' => '',
        'horario' => '',
        'link' => '',
        'duracion' => '',
        'fecha_inicio' => '',
        'fecha_fin' => '',
        'descripcion' => '',
        'fecha_pago' => '',
        'costo' => '',
        'docente_id' => '',
    ];

    // Definimos las reglas de validación
    protected $rules = [
        'nombre' => 'required|string|min:10',
        'cupo_max' => 'required|integer|min:1', // Para valores enteros
        'horario' => 'required|string', // O validar con un formato personalizado si es datetime
        'link' => 'required|url', // Mejor usar `url` si esperas un enlace
        'duracion' => 'required|integer|min:1', // Para un número entero positivo
        'fecha_inicio' => 'required|date|before_or_equal:fecha_fin',
        'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        'descripcion' => 'required|string|min:10',
        'fecha_pago' => 'required|date',
        'costo' => 'required|numeric',
    ];


    protected $messages = [
      'nombre.required' => 'El nombre es obligatorio.',
      'nombre.min' => 'El nombre debe tener al menos 10 caracteres.',
      'cupo_max.required' => 'El cupo máximo es obligatorio.',
      'horario.required' => 'El horario es obligatorio.',
      'link.required' => 'El link es obligatorio.',
      'duracion.required' => 'La duracion es obligatoria.',
      'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
      'fecha_fin.required' => 'La fecha de fin es obligatoria.',
      'descripcion.required' => 'La descripcion de fin es obligatoria.',
      'fecha_pago.required' => 'La fecha de pago es obligatoria.',
      'costo.required' => 'El costo es obligatoria.',
    ];
    

    public function render()
    {
        $docente = auth('docentes')->user();

        $cursos = $docente ? Curso::where('docente_id', $docente->id)->get() : collect();

        return view('livewire.dashboard.docente', compact('cursos'));
        
    }

    public function enviar()
    {
        $this->validate();

        $curso = new Curso();
        $curso->nombre = $this->nombre;
        $curso->cupo_max = $this->cupo_max;
        $curso->horario = $this->horario;
        $curso->link = $this->link;
        $curso->duracion = $this->duracion;
        $curso->fecha_inicio = $this->fecha_inicio;
        $curso->fecha_fin = $this->fecha_fin;
        $curso->descripcion = $this->descripcion;
        $curso->fecha_pago = $this->fecha_pago;
        $curso->costo = $this->costo;
        $curso->docente_id = auth('docentes')->id();
        $curso->save();
        $this->reset(['nombre', 'cupo_max','horario','link','duracion','fecha_inicio','fecha_fin','descripcion', 'fecha_pago', 'costo']); // Resetear todo el contenido de algún formulario, una vez que guarde las resetea
        $this->mCreate = false;

        
    }

    public function abrirF(){
        $this->mCreate = true;
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

    public function mount(){
          if (!Auth::guard('docentes')->check()) {
              return redirect()->route('docente-login');
          }
    }

    public function formCancel(){
      $this->reset([
        'mCreate',
        'nombre',
        'cupo_max',
        'horario',
        'link',
        'duracion',
        'fecha_inicio',
        'fecha_fin',
        'descripcion',
        'fecha_pago',
        'costo'
      ]);
    }

    public function formCancelEdit(){
      $this->reset([
        'mEdit',
      ]);
    }

    public function editar($cursoID){
      $this->mEdit = true;
      $cursoEditable = Curso::find($cursoID);
      $this->idEditable = $cursoEditable->id;
      $this->cursoEdit['nombre'] = $cursoEditable->nombre;
      $this->cursoEdit['cupo_max'] = $cursoEditable->cupo_max;
      $this->cursoEdit['horario'] = $cursoEditable->horario;
      $this->cursoEdit['link'] = $cursoEditable->link;
      $this->cursoEdit['duracion'] = $cursoEditable->duracion;
      $this->cursoEdit['fecha_inicio'] = $cursoEditable->fecha_inicio;
      $this->cursoEdit['fecha_fin'] = $cursoEditable->fecha_fin;
      $this->cursoEdit['descripcion'] = $cursoEditable->descripcion;
      $this->cursoEdit['fecha_pago'] = $cursoEditable->fecha_pago;
      $this->cursoEdit['costo'] = $cursoEditable->costo;
    }

    public function update(){
      $curso = Curso::find($this->idEditable);
      
      $curso->update([
        'nombre' => $this->cursoEdit['nombre'],
        'cupo_max' => $this->cursoEdit['cupo_max'],
        'horario' => $this->cursoEdit['horario'],
        'link' => $this->cursoEdit['link'],
        'duracion' => $this->cursoEdit['duracion'],
        'fecha_inicio' => $this->cursoEdit['fecha_inicio'],
        'fecha_fin' => $this->cursoEdit['fecha_fin'],
        'descripcion' => $this->cursoEdit['descripcion'],
        'fecha_pago' => $this->cursoEdit['fecha_pago'],
        'costo' => $this->cursoEdit['costo'],
      ]);

      $this->reset([
        'mEdit',
        'idEditable',
        'cursoEdit'
      ]);
    }

    public function eliminar(Curso $curso){
      $curso->delete();
    }

    public function logout() {
          Auth::guard('docentes')->logout();  // Cierra la sesión para el guard 'administrativos'
          return redirect()->route('docente-login');  // Redirige al usuario a la página de inicio de sesión
    }
}