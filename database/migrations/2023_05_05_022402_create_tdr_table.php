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
        Schema::create('tdr', function (Blueprint $table) {
            $table->id('idTDR');

            $table->integer('idResponsable');
            $table->integer('idNecesidades');
            $table->string('areaTDR');
            $table->string('descripcionTDR')->nullable();
            $table->string('aplicacionTDR', 100)->nullable();
            $table->dateTime('fechaSolicitudTDR');
            $table->tinyInteger('estadoTDR');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdr');
    }
};
