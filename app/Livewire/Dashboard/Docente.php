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
    public $categoryEdit = [
        'id' => '',
        'nombre' => '',
        'cupo_max' => '',
        'horario' => '',
        'link' => '',
        'duracion' => '',
        'fecha_inicio' => '',
        'fecha_fin' => '',
        'descripcion' => '',
        'docente_id' => '',
    ];


    public function render()
    {
        $docente = auth('docentes')->user();

        $cursos = $docente ? Curso::where('docente_id', $docente->id)->get() : collect();

        return view('livewire.dashboard.docente', compact('cursos'));
        
    }

    public function enviar()
    {
        $curso = new Curso();
        $curso->nombre = $this->nombre;
        $curso->cupo_max = $this->cupo_max;
        $curso->horario = $this->horario;
        $curso->link = $this->link;
        $curso->duracion = $this->duracion;
        $curso->fecha_inicio = $this->fecha_inicio;
        $curso->fecha_fin = $this->fecha_fin;
        $curso->descripcion = $this->descripcion;
        $curso->docente_id = auth('docentes')->id();
        $curso->save();
        $this->reset(['nombre', 'cupo_max','horario','link','duracion','fecha_inicio','fecha_fin','descripcion']); // Resetear todo el contenido de algún formulario, una vez que guarde las resetea
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
        $this->nombreD = Auth::user()->nombre;
        $this->expediente = Auth::user()->expediente;
        $this->correo = Auth::user()->correo;
        $this->telefono = Auth::user()->telefono;
    }

    
}
