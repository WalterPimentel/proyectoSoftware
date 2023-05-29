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
        Schema::create('acciones_mejoras', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idPlanFD')->nullable();
            $table->foreign('idPlanFD')
                ->references('id')
                ->on('planes_fd')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('idComision')->nullable();
            $table->foreign('idComision')
                ->references('id')
                ->on('comisiones_areas')
                ->onDelete('set null')
                ->onUpdate('cascade');            
            
            $table->unsignedBigInteger('idMonitoreoPFD')->nullable();
            $table->foreign('idMonitoreoPFD')
                ->references('id')
                ->on('monitoreos_pfd')
                ->onDelete('set null')
                ->onUpdate('cascade');  
            
            $table->unsignedBigInteger('idTipoRecurso')->nullable();
            $table->foreign('idTipoRecurso')
                ->references('id')
                ->on('tipos_recursos')
                ->onDelete('set null')
                ->onUpdate('cascade'); 

            $table->string('metasAM');
            $table->string('descripcionAM');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acciones_mejoras');
    }
};
