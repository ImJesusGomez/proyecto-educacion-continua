<?php

namespace App\Livewire\Admin;

use App\Models\Curso;
use Livewire\Component;
use Livewire\WithPagination;

class CreateCurso extends Component
{
    use WithPagination;

    // Atributos de curso
    public $nombre, $cupo_max, $horario, $link, $duracion, $fecha_inicio, $fecha_fin, $descripcion;

    public $curso;
    public $cursoEdit = [
      'nombre' => '',
      'cupo_max' => '',
      'horario' => '',
      'link' => '',
      'duracion' => '',
      'fecha_inicio' => '',
      'fecha_fin' => '',
      'descripcion' => '',
    ];

    public $mEdit = false;
    public $idEditable;
    public $mAdd = false;
    public $search = '';

    public function render()
    {
        $cursos = Curso::where('nombre', 'like','%'.$this->search.'%')
                ->orderBy('id', 'desc')
                ->paginate(10);
        return view('livewire.admin.create-curso', compact('cursos'));
    }

    public function save(){
      $curso = new Curso();
      $curso->nombre = $this->nombre;
      $curso->cupo_max = $this->cupo_max;
      $curso->horario = $this->horario;
      $curso->link = $this->link;
      $curso->duracion = $this->duracion;
      $curso->fecha_inicio = $this->fecha_inicio;
      $curso->fecha_fin = $this->fecha_fin;
      $curso->descripcion = $this->descripcion;
      $curso->save();

      $this->reset(['nombre', 'cupo_max', 'horario', 'link', 'duracion', 'fecha_inicio', 'fecha_fin', 'descripcion']);
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
      ]);

      $this->reset([
        'cursoEdit',
        'idEditable',
        'mEdit',
      ]);
    }

    public function eliminar(Curso $curso){
      $curso->delete();
    }
}
