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
        Schema::create('monitoreo_pfd', function (Blueprint $table) {
            $table->id('idMonitoreoPFD');

            $table->integer('idAccionesMejora');
            $table->string('descripcionMPFD');
            $table->decimal('porcentajeAvanceMPFD', 5, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoreo_pfd');
    }
};
