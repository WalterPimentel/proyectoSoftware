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
        Schema::create('acciones_mejoras', function (Blueprint $table) {
            $table->id();

            $table->integer('idComision');
            $table->integer('idPlanFD');
            $table->integer('idMonitoreoPFD');
            $table->integer('idTipoRecurso');
            $table->string('metasAM');
            $table->string('descripcionAM');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acciones_mejoras');
    }
};
