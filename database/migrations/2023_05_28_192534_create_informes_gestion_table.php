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
        Schema::create('informes_gestion', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('idMonitoreoPFD')->nullable();
            $table->foreign('idMonitoreoPFD')
                ->references('id')
                ->on('monitoreos_pfd')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->integer('idResponsableElaboracion');
            $table->string('descripcionIG');
            $table->string('observacionesIG')->nullable();            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes_gestion');
    }
};
