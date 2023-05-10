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
        Schema::create('tdr', function (Blueprint $table) {
            $table->id('idTDR');

            $table->integer('idTipoRecurso');
            $table->string('mayorCuantiaTDR', 100);
            $table->string('descripcionTDR');
            $table->decimal('costoTDR', 10, 2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdr');
    }
};
