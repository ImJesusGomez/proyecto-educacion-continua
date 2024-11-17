<?php

namespace App\Livewire\Student;

use App\Models\Estudiante;
use Livewire\Component;

class AdminCreateStudent extends Component
{

    public $name, $expediente, $carrera, $semestre, $nip, $correo;
    public $estudiante;
    public $estudiantes;
    public $estudianteEdit = [
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



    public function render()
    {
        $estudiantes = Estudiante::all(); // Esto carga todos los estudiantes
        return view('livewire.student.admin-create-student', compact('estudiantes'));
    }
}
