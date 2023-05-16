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
        Schema::create('comunicar_planes_fd', function (Blueprint $table) {
            $table->id();

            $table->integer('idPlanFD');
            $table->integer('idParteInteresada');
            $table->string('descripcionComunicarPFD');
            $table->string('medioComunicarPFD', 100);
            $table->date('fechaComunicarPFD');
            $table->time('horaComunicarPFD');
            $table->string('observacionesComunicarPFD')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicar_planes_fd');
    }
};
