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
        Schema::create('comisiones_areas', function (Blueprint $table) {
            $table->id('idComision');

            $table->integer('idDocente');
            $table->integer('idAdministrativo');
            $table->string('nombreComision', 25);
            $table->string('macroProcesComision', 50);
            $table->string('procesosComision', 50);
            $table->string('subprocesosComision', 50);
            $table->string('periodoComision', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comisiones_areas');
    }
};
