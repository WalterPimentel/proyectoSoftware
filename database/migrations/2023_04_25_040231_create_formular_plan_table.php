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
        Schema::create('Plan_FD', function (Blueprint $table) {
            $table->id('idPlanFD');

            $table->integer('idResponsable');
            $table->integer('idResponsableEnviado');
            $table->string('areaPlanFD');
            $table->dateTime('fechaRegistroPlanFD');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Plan_FD');
    }
};
