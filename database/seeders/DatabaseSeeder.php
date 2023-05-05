<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Practica;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $practica = new Practica();
        
        $practica->Codigo = '0001';
        $practica->idEstudiante = 1;
        $practica->idDocente = 3;
        $practica->idEmpresa = 4;
        $practica->Titulo = "Implementación web con ISO 9001 para la gestión de calidad de la Universidad Continental";
        $practica->idEtapa = 1;

        $practica->save();
    }
}
