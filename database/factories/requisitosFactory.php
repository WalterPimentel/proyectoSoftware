<?php

namespace Database\Factories;

use App\Models\requisitos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\requisitos>
 */
class requisitosFactory extends Factory
{
    
    protected $model = requisitos::class;

    public function definition(): array
    {
        return [
            
            'nombreRequisito' => $this->faker->sentence(),
            'descripcionRequisito' => $this->faker->paragraph(),
            'estado' => $this->faker->numberBetween(-128,127),

        ];
    }
}
