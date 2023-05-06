<?php

namespace Database\Factories;

use App\Models\practicas_requisitos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\practicas_requisitos>
 */
class practicas_requisitosFactory extends Factory
{
    protected $model = practicas_requisitos::class;

    public function definition(): array
    {
        return [
            
            'idPractica' => $this->faker->numberBetween(1,50),
            'idRequisito' => $this->faker->numberBetween(1,178),

        ];
    }
}
