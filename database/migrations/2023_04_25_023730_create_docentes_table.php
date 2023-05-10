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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id('idDocente');

            $table->string('codigoDocente', 15);
            $table->string('nombresDocente', 30);
            $table->string('apellidopDocente', 20);
            $table->string('apellidomDocente', 20);
            $table->string('telefonoDocente', 15);
            $table->string('correoDocente', 50);
            $table->string('avatar')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
