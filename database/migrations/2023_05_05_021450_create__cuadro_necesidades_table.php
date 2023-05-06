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
        Schema::create('Cuadro_Necesidades', function (Blueprint $table) {
            $table->id('idCuadroNecesidades');

            $table->integer('idTDR');            
            $table->integer('idResponsableEnviado');
            $table->string('areaCuadroNecesidades');
            $table->tinyInteger('estadoCuadroNecesidades');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cuadro_Necesidades');
    }
};
