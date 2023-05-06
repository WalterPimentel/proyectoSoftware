<?php

namespace Database\Factories;

use App\Models\acta_aprobacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\acta_aprobacion>
 */
class acta_aprobacionFactory extends Factory
{
    
    protected $model = acta_aprobacion::class;

    public function definition(): array
    {
        return [
            
            'idPlanFD' => $this->faker->numberBetween(1,50),
            'idSecretariaDecanato' => $this->faker->numberBetween(1,3),
            'FechaActaAprobacion' => $this->faker->dateTimeBetween('-1 week'),
            
        ];
    }
}
