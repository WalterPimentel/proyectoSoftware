<?php

use App\Models\estudiantes;
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
        Schema::create('practicas', function (Blueprint $table) {
            $table->id();

            $table->integer('codigo');

            $table->unsignedBigInteger('idEstudiante')->unique();
            $table->foreign('idEstudiante')
                ->references('id')
                ->on('estudiantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->unsignedBigInteger('idDocente')->nullable();
            $table->foreign('idDocente')
                ->references('id')
                ->on('docentes')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('idEtapa')->nullable();
            $table->foreign('idEtapa')
                ->references('id')
                ->on('etapas')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('idEmpresa')->nullable();
            $table->foreign('idEmpresa')
                ->references('id')
                ->on('empresas')
                ->onDelete('set null')
                ->onUpdate('cascade');        

            $table->string('titulo', 250);            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practicas');
    }
};
