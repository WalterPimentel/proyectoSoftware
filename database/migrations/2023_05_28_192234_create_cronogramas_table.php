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
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idPlanFD')->unique();
            $table->foreign('idPlanFD')
                ->references('id')
                ->on('planes_fd')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->integer('idProyecto');
            $table->string('descripcionCronograma');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronogramas');
    }
};
