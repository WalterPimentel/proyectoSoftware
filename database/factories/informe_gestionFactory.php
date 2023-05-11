<?php

namespace Database\Factories;

use App\Models\informe_gestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\informe_gestion>
 */
class informe_gestionFactory extends Factory
{
    
    protected $model = informe_gestion::class;

    public function definition(): array
    {
        return [
            
            'idMonitoreoPFD' => $this->faker->numberBetween(1,3),
            'idResponsableElaboracion' => $this->faker->numberBetween(1, 10),
            'descripcionIG' => $this->faker->sentence(),
            'observacionesIG' => $this->faker->sentence()

        ];
    }
}
