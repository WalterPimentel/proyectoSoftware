<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\{acta_aprobacion, cronograma, cuadro_necesidades, docentes, empresas, estudiantes, etapas, informe_gestion, necesidades, 
                plan_fd, Practica, practicas_requisitos, publicaciones_plan_fd, requisitos, responsables_cpi, tdr, User};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        
        acta_aprobacion::factory(50)->create();
        cronograma::factory(50)->create();
        cuadro_necesidades::factory(50)->create();
        docentes::factory(20)->create();
        empresas::factory(50)->create();
        estudiantes::factory(100)->create();
        etapas::factory(3)->create();
        informe_gestion::factory(50)->create();
        necesidades::factory(250)->create();
        plan_fd::factory(50)->create();
        Practica::factory(50)->create();
        practicas_requisitos::factory(73)->create();
        publicaciones_plan_fd::factory(50)->create();
        requisitos::factory(178)->create();
        responsables_cpi::factory(3)->create();
        tdr::factory(50)->Create();
        User::factory(10)->create();

    }
}
