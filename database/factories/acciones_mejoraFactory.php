<?php

namespace Database\Factories;

use App\Models\acciones_mejora;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\acciones_mejora>
 */
class acciones_mejoraFactory extends Factory
{
    
    protected $model = acciones_mejora::class;

    public function definition(): array
    {
        return [
            'idComision' => $this->faker->numberBetween(1,10),
            'idPlanFD' => $this->faker->numberBetween(1,25),
            'idMonitoreoPFD' => $this->faker->numberBetween(1,175),
            'idTipoRecurso' => $this->faker->numberBetween(1,2),
            'metasAM' => $this->faker->words(2, true),
            'descripcionAM' => $this->faker->sentence()
        ];
    }
}
