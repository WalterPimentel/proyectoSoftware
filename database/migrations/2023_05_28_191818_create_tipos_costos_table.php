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
        Schema::create('tipos_costos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('idTipoRecurso')->unique();
            $table->foreign('idTipoRecurso')
                ->references('id')
                ->on('tipos_recursos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->boolean('descripcionCosto');
            $table->string('observacionesCosto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_costos');
    }
};
