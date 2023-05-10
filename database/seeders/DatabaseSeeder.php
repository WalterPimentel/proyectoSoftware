<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\{acciones_mejora, comisiones_areas, comunicar_plan_fd, cronograma, cuadro_necesidades, docentes, empresas, estudiantes, etapas, informe_gestion, 
                monitoreo_pfd, plan_fd, Practica, practicas_requisitos, requisitos, revision_pfd, tdr, tipo_costo, tipo_recurso, User};
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        acciones_mejora::factory(137)->create();
        comisiones_areas::factory(10)->create();
        comunicar_plan_fd::factory(25)->create();
        cronograma::factory(25)->create();
        cuadro_necesidades::factory(25)->create();
        docentes::factory(20)->create();
        empresas::factory(50)->create();
        estudiantes::factory(100)->create();
        etapas::factory(3)->create();
        //informe_gestion::factory(25)->create()
        monitoreo_pfd::factory(175)->create();
        plan_fd::factory(25)->create();
        Practica::factory(50)->create();
        practicas_requisitos::factory(73)->create();        
        requisitos::factory(178)->create();
        revision_pfd::factory(25)->create();
        tipo_costo::factory(2)->create();
        tipo_recurso::factory(2)->create();
        tdr::factory(25)->Create();
        User::factory(10)->create();

    }
}
