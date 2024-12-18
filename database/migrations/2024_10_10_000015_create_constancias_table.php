<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('constancias', function (Blueprint $table) {
            $table->id();
            $table->float('calificacion');
            $table->date('fecha');
            $table->foreignId('estudiante_id')->constrained('estudiantes', 'id')->onDelete('cascade');
            $table->foreignId('curso_id')->constrained('cursos', 'id')->onDelete('cascade');
            $table->foreignId('docente_id')->constrained('docentes', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constancias');
    }
};
