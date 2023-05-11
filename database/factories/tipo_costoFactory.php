<?php

namespace Database\Factories;

use App\Models\tipo_costo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipo_costo>
 */
class tipo_costoFactory extends Factory
{
    
    protected $model = tipo_costo::class;

    public function definition(): array
    {
        return [

            'idTipoRecurso' => $this->faker->numberBetween(1,2),
            'descripcionCosto' => $this->faker->boolean(),
            'observacionesCosto' => $this->faker->sentence(),
            
        ];
    }
}
