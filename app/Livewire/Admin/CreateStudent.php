<?php

namespace App\Livewire\Admin;

use App\Models\Estudiante;
use Livewire\Component;
use Livewire\WithPagination;

class CreateStudent extends Component
{

    use WithPagination;

    // public $students;
    public $nombre, $expediente, $carrera, $semestre, $nip, $correo;
    public $student;
    public $studentEdit = [
        'id' => ',',
        'nombre' => ',',
        'expediente' => ',',
        'carrera' => ',',
        'semestre' => ',',
        'nip' => ',',
        'correo' => ',',
    ];

    public $mEdit = false;
    public $idEditable;
    public $mAdd = false;
    public $search = '';



    // public function mount()
    // {
    //     // Carga los estudiantes desde la base de datos
    //     $this->students = Estudiante::all();
    // }




    public function render()   //Funcion render->Todo lo que aparezca en mi lista, lo va a pintar con esta función
    {
        $students = Estudiante::where('nombre', 'like', '%' . $this->search . '%')
            ->orwhere('correo', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('livewire.admin.create-student', compact('students'));
    }



    public function save()
    {
        $student = new Estudiante();
        $student->nombre = $this->nombre;
        $student->expediente = $this->expediente;
        $student->carrera = $this->carrera;
        $student->semestre = $this->semestre;
        $student->nip = $this->nip;
        $student->correo = $this->correo;
        $student->save();
        $this->reset(['nombre', 'expediente', 'carrera', 'semestre', 'nip', 'correo']);
    }


    public function editar($studentID)
    {
        $this->mEdit = true;
        $studentEditable = Estudiante::find($studentID);
        $this->idEditable = $studentEditable->id;    //Tambipen se modificó esto pa que funiconara el "actuaizar"
        $this->studentEdit['nombre'] = $studentEditable->nombre;
        $this->studentEdit['expediente'] = $studentEditable->expediente;
        $this->studentEdit['carrera'] = $studentEditable->carrera;
        $this->studentEdit['semestre'] = $studentEditable->semestre;
        $this->studentEdit['nip'] = $studentEditable->nip;
        $this->studentEdit['correo'] = $studentEditable->correo;
    }

    public function update()
    {
        $student = Estudiante::find($this->idEditable);
        $student->update([
            'nombre' => $this->studentEdit['nombre'],
            'expediente' => $this->studentEdit['expediente'],
            'carrera' => $this->studentEdit['carrera'],
            'semestre' => $this->studentEdit['semestre'],
            'nip' => $this->studentEdit['nip'],
            'correo' => $this->studentEdit['correo'],
        ]);

        $this->reset([
            'studentEdit',
            'idEditable',
            'mEdit',
        ]);
    }

    public function eliminar(Estudiante $student)
    {
        $student->delete();
    }
}
