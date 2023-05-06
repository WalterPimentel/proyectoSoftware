<?php

namespace Database\Factories;

use App\Models\tdr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tdr>
 */
class tdrFactory extends Factory
{
    
    protected $model = tdr::class;

    public function definition(): array
    {
        return [
            
            'idResponsable' => $this->faker->numberBetween(1,3),
            'idNecesidades' => $this->faker->numberBetween(1,250),            
            'areaTDR' => $this->faker->sentence(),
            'fechaSolicitudTDR' => $this->faker->dateTimeBetween('-4 week', '-1 week'),
            'estadoTDR' => $this->faker->numberBetween(-128,127),

        ];
    }
}
