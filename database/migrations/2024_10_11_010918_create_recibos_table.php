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
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->integer('folio');
            $table->date('fecha_vencimiento');
            $table->float('monto', 8, 2);
            $table->integer('referencia_1');
            $table->integer('referencia_2');

            $table->foreignId('estudiante_id')->constrained('estudiantes', 'id')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibos');
    }
};
