<?php

namespace Database\Factories;

use App\Models\comisiones_areas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comisiones_areas>
 */
class comisiones_areasFactory extends Factory
{
    
    protected $model = comisiones_areas::class;

    public function definition(): array
    {
        return [
            'idDocente' => $this->faker->numberBetween(1,20),
            'idAdministrativo' => $this->faker->numberBetween(1,5),
            'nombreComision' => $this->faker->words(2, true),
            'macroProcesComision' => $this->faker->words(3, true),
            'procesosComision' => $this->faker->words(3, true),
            'subprocesosComision' => $this->faker->words(3, true),
            'periodoComision' => $this->faker->sentence(1)
        ];
    }
}
