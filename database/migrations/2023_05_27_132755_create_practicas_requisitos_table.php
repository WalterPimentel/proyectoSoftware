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
        Schema::create('practicas_requisitos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idPractica');
            $table->foreign('idPractica')
                ->references('id')
                ->on('practicas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('idRequisito');
            $table->foreign('idRequisito')
                ->references('id')
                ->on('requisitos')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas_requisitos');
    }
};
