<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Estudiante;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function getReport($cursoID, $estudianteID){
      $curso = Curso::find($cursoID);
      $estudiante = Estudiante::find($estudianteID);

      $pdf = Pdf::loadView('pdf.recibo', compact('curso', 'estudiante'));

      return $pdf->stream('recibo-curso.pdf');
    }
}
