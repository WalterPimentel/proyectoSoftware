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
        Schema::create('cuadro_necesidades', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idComision')->unique();
            $table->foreign('idComision')
                ->references('id')
                ->on('comisiones_areas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                        
            $table->unsignedBigInteger('idTipoRecurso')->nullable();
            $table->foreign('idTipoRecurso')
                ->references('id')
                ->on('tipos_recursos')
                ->onDelete('set null')
                ->onUpdate('cascade');
            
            $table->unsignedBigInteger('idTipoCosto')->nullable();
            $table->foreign('idTipoCosto')
                ->references('id')
                ->on('tipos_costos')
                ->onDelete('set null')
                ->onUpdate('cascade');
                        
            $table->unsignedBigInteger('idTDR')->nullable();
            $table->foreign('idTDR')
                ->references('id')
                ->on('tdr')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('descripcionCuadroN');
            $table->integer('cantidadCuadroN');
            $table->decimal('precioCuadroN', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuadro_necesidades');
    }
};
