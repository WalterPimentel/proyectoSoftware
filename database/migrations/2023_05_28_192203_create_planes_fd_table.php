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
        Schema::create('planes_fd', function (Blueprint $table) {
            $table->id();                        
            
            $table->unsignedBigInteger('idCuadroNecesidades')->nullable();
            $table->foreign('idCuadroNecesidades')
                ->references('id')
                ->on('cuadro_necesidades')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('idComision')->nullable();
            $table->foreign('idComision')
                ->references('id')
                ->on('comisiones_areas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('idRevisionPFD')->unique();
            $table->foreign('idRevisionPFD')
                ->references('id')
                ->on('revisiones_pfd')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('planes_fd');
    }
};
