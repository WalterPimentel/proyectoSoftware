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
        Schema::create('tipo_costo', function (Blueprint $table) {
            $table->id('idTipoCosto');

            $table->integer('idTipoRecurso');
            $table->boolean('descripcionCosto');
            $table->string('observacionesCosto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_costo');
    }
};
