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
        Schema::create('acta_aprobacion', function (Blueprint $table) {
            $table->id('idActaAprobacion');

            $table->integer('idPlanFD');
            $table->integer('idSecretariaDecanato');
            $table->dateTime('FechaActaAprobacion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acta_aprobacion');
    }
};
