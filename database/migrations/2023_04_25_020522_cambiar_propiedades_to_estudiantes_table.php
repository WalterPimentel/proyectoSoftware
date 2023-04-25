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
        Schema::table('estudiantes', function (Blueprint $table) {
            //indicar columna a modificar
            $table->string('codigoEstudiante', 15)->change();
            $table->string('nombresEstudiante', 25)->change();
            $table->string('apellidopEstudiante', 20)->change();
            $table->string('apellidomEstudiante', 20)->change();
            $table->string('telefonoEstudiante', 15)->change();
            $table->string('correoEstudiante', 50)->change();

            //caso tengas una columna que si aceptara datos nulos

            /*

            $table->string('nombre', 25)->nulltable()->change();
            
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            //
        });
    }
};
