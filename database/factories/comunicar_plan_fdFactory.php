<?php

namespace Database\Factories;

use App\Models\comunicar_plan_fd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comunicar_plan_fd>
 */
class comunicar_plan_fdFactory extends Factory
{
    protected $model = comunicar_plan_fd::class;

    public function definition(): array
    {
        return [

            'idPlanFD' => $this->faker->unique()->numberBetween(1,25),
            'idParteInteresada' => $this->faker->numberBetween(1,7),
            'descripcionComunicarPFD' => $this->faker->sentence(),
            'medioComunicarPFD' => $this->faker->words(2, true),
            'fechaComunicarPFD' => $this->faker->dateTimeBetween('-25 years', 'now'),
            'horaComunicarPFD' => $this->faker->time(),
            'observacionesComunicarPFD' => $this->faker->numberBetween(1,20)
        ];
    }
}
