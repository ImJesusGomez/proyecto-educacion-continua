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
        Schema::create('estudiantes_tabla', function (Blueprint $table) {
            $table->id();

            $table->string('nombre');
            $table->integer('expediente');
            $table->string('carrera');
            $table->integer('semestre');
            $table->string('nip');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes_tabla');
    }
};
