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
            //agregando una nueva columna

            //nulltable() -> propiedad que acepta valores nulos en la columna
            //after() -> propiedad que indica después de que columna ubicar la nueva
            $table->string('foto')->nullable()->after('correoEstudiante');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            //eliminar las columnas deseadas (existen o no)
            $table->dropColumn('foto');
        });
    }
};
