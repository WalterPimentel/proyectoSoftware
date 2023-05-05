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
        Schema::create('Responsables_CPI', function (Blueprint $table) {
            $table->id('idResponsable');

            $table->string('codigoResponsable', 15);
            $table->string('nombresResponsable', 25);
            $table->string('apellidopResponsable', 20);
            $table->string('apellidomResponsable', 20);
            $table->string('cargoResponsable', 100);
            $table->string('areaResponsable', 100);
            $table->string('telefonoResponsable', 15)->nullable();
            $table->string('correoResponsable', 15)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ResponsablesCPI');
    }
};
