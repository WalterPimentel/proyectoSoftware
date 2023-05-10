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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id('idEmpresa');

            $table->string('nombreEmpresa', 100);
            $table->string('encargadoEmpresa', 100);
            $table->string('rubroEmpresa', 100);
            $table->string('direccionEmpresa', 100);
            $table->string('telefonoEmpresa', 15)->nullable();
            $table->string('avatar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
