<?php

namespace Database\Factories;

use App\Models\plan_fd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\plan_fd>
 */
class plan_fdFactory extends Factory
{
    
    protected $model = plan_fd::class;
    
    public function definition(): array
    {
        return [
            
            'idResponsable' => $this->faker->numberBetween(1,3),
            'idResponsableEnviado' => $this->faker->numberBetween(1,5),
            'areaPlanFD' => $this->faker->sentence(),
            'fechaRegistroPlanFD' => $this->faker->dateTimeBetween('-1 week'),

        ];
    }
}
