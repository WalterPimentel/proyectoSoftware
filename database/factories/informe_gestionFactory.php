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
            
            'idResponsable' => $this->faker->numberBetween(1,3),
            'nombreInformeGestion' => $this->faker->sentence(),
            'areaGestion' => $this->faker->sentence(),
            'descripcionInformeGestion' => $this->faker->sentence(),
            'estadoInformeGestion' => $this->faker->numberBetween(-128,127),

        ];
    }
}
