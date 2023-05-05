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
        Schema::create('informe_gestion', function (Blueprint $table) {
            $table->id('idInformeGestion');

            $table->integer('idResponsable');
            $table->string('nombreInformeGestion', 100);
            $table->string('areaGestion');
            $table->string('descripcionInformeGestion')->nullable();
            $table->tinyInteger('estadoInformeGestion');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe_gestion');
    }
};
