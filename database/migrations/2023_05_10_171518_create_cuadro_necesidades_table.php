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
        Schema::create('cuadro_necesidades', function (Blueprint $table) {
            $table->id('idCuadroNecesidad');

            $table->integer('idComision');            
            $table->integer('idTipoRecurso');
            $table->integer('idTipoCosto');
            $table->integer('idTDR');
            $table->string('descripcionCuadroN');
            $table->integer('cantidadCuadroN');
            $table->decimal('precioCuadroN', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadro_necesidades');
    }
};
