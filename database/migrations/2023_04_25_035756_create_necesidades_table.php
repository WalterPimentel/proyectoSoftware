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
        Schema::create('Necesidades', function (Blueprint $table) {
            $table->id('idNecesidades');

            $table->string('areaNecesidades');
            $table->string('descripcionNecesidades')->nullable();
            $table->string('aplicacionNecesidades', 100)->nullable();
            $table->dateTime('fechaSolicitudNecesidades');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Necesidades');
    }
};
