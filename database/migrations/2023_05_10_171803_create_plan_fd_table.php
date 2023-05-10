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
        Schema::create('plan_fd', function (Blueprint $table) {
            $table->id('idPlanFD');

            $table->integer('idComision');
            $table->integer('idCuadroNecesidades');
            $table->integer('idRevisionPFD');
            $table->integer('idActaConsejoFacultad');
            $table->integer('idResponsableElaboracion');
            $table->integer('idResponsableAprobacion');
            $table->string('descripcionPFD');
            $table->dateTime('fechaElaboracionPFD');
            $table->dateTime('fechaAprobacionPFD');
            $table->year('yearPFD');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_fd');
    }
};
