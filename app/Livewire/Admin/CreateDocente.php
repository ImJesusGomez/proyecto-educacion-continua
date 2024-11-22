<?php

namespace App\Livewire\Admin;

use App\Models\Docente;
use Livewire\Component;
use Livewire\WithPagination;

class CreateDocente extends Component
{
    use WithPagination;

    // Atributos de Docente
    public $nombre, $expediente, $nip, $correo, $telefono;
    
    public $docente;
    public $docenteEdit = [
      'nombre' => '',
      'expediente' => '',
      'nip' => '',
      'correo' => '',
      'telefono' => '',
    ];

    public $mEdit = false;
    public $idEditable;
    public $mAdd = false;
    public $search = '';

    public function render()
    {
        $docentes = Docente::where('nombre', 'like', '%'.$this->search.'%')
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        return view('livewire.admin.create-docente', compact('docentes'));
    }

    public function save(){
      $docente = new Docente();
      $docente->nombre = $this->nombre;
      $docente->expediente = $this->expediente;
      $docente->nip = $this->nip;
      $docente->correo = $this->correo;
      $docente->telefono = $this->telefono;
      $docente->save();

      $this->reset(['nombre', 'expediente', 'nip', 'correo', 'telefono']);
    }

    public function editar($docenteID){
      $this->mEdit = true;
      $docenteEditable = Docente::find($docenteID);
      $this->idEditable = $docenteEditable->id;
      $this->docenteEdit['nombre'] = $docenteEditable->nombre;
      $this->docenteEdit['expediente'] = $docenteEditable->expediente;
      $this->docenteEdit['nip'] = $docenteEditable->nip;
      $this->docenteEdit['correo'] = $docenteEditable->correo;
      $this->docenteEdit['telefono'] = $docenteEditable->telefono;
    }

    public function update(){
      $docente = Docente::find($this->idEditable);
      $docente->update([
        'nombre' => $this->docenteEdit['nombre'],
        'expediente' => $this->docenteEdit['expediente'],
        'nip' => $this->docenteEdit['nip'],
        'correo' => $this->docenteEdit['correo'],
        'telefono' => $this->docenteEdit['telefono'],
      ]);

      $this->reset([
        'docenteEdit',
        'idEditable',
        'mEdit',
      ]);
    }
    

    public function eliminar(Docente $docente){
      $docente->delete();
    }
}

