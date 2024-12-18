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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cupo_max');
            $table->dateTime('horario');
            $table->string('link');
            $table->integer('duracion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->text('descripcion');

            $table->foreignId('docente_id')->constrained('docentes', 'id')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
