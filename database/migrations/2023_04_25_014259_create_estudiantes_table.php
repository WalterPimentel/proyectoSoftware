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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id('idEstudiante');

            $table->string('codigoEstudiante');
            $table->string('nombresEstudiante');
            $table->string('apellidopEstudiante');
            $table->string('apellidomEstudiante');
            $table->string('telefonoEstudiante');
            $table->string('correoEstudiante');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
