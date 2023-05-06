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
        Schema::create('publicaciones_plan_fd', function (Blueprint $table) {
            $table->id('idPublicacionPlanFD');

            $table->integer('idActaAprobacion');
            $table->integer('idCronograma');
            $table->tinyInteger('estadoPublicacionPlanFD');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicaciones_plan_fd');
    }
};
