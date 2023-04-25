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
            $table->id();

            $table->string('codigoDocente', 15);
            $table->string('nombresDocente', 25);
            $table->string('apellidopDocente', 20);
            $table->string('apellidomDocente', 20);
            $table->string('telefonoDocente', 15);
            $table->string('CorreoDocente', 50);
            $table->string('avatar');

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
