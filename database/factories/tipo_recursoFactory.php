<?php

namespace Database\Factories;

use App\Models\tipo_recurso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipo_recurso>
 */
class tipo_recursoFactory extends Factory
{
    protected $model = tipo_recurso::class;

    public function definition(): array
    {
        return [
            
            'descripcionRecurso' => $this->faker->sentence()
        ];
    }
}
