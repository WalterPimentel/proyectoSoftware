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
            $table->id();

            $table->string('codigoEstudiante', 15);
            $table->string('nombresEstudiante', 30);
            $table->string('apellidopEstudiante', 20);
            $table->string('apellidomEstudiante', 20);
            $table->string('telefonoEstudiante', 15);
            $table->string('correoEstudiante', 70);
            $table->string('fotoEstudiante')->nullable();

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
