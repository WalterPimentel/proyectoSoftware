<?php

namespace Database\Factories;

use App\Models\cronograma;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cronograma>
 */
class cronogramaFactory extends Factory
{
    protected $model = cronograma::class;

    public function definition(): array
    {
        return [
            
            'idProyecto' => $this->faker->numberBetween(1,20),
            'areaCronograma'  => $this->faker->sentence(),
            'fechaRegistroCronograma' => $this->faker->dateTimeBetween('-1 week'),

        ];
    }
}
