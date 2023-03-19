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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('ficha_programa');
            $table->string('tipo_documento');
            $table->integer('numero_documento');
            $table->string('nombre_aprendiz');
            $table->string('trimestre_I_2020')->nullable();
            $table->string('trimestre_II_2020')->nullable();
            $table->string('trimestre_III_2020')->nullable();
            $table->string('trimestre_IV_2020')->nullable();
            $table->string('trimestre_I_2021')->nullable();
            $table->string('trimestre_II_2021')->nullable();
            $table->string('trimestre_III_2021')->nullable();
            $table->string('trimestre_IV_2021')->nullable();
            $table->string('trimestre_I_2022')->nullable();
            $table->string('trimestre_II_2022')->nullable();
            $table->string('trimestre_III_2022')->nullable();
            $table->string('trimestre_IV_2022')->nullable();
            $table->string('trimestre_I_2023')->nullable();
            $table->string('trimestre_II_2023')->nullable();
            $table->string('estado');
            $table->string('competencia');
            $table->string('resultado_aprendizaje');
            $table->string('jucio_evaluacion');
            $table->string('funcionario_registro_juicio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
