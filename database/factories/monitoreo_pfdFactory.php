<?php

namespace Database\Factories;

use App\Models\monitoreo_pfd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\monitoreo_pfd>
 */
class monitoreo_pfdFactory extends Factory
{
    
    protected $model = monitoreo_pfd::class;
    
    public function definition(): array
    {
        return [
          
            'idAccionesMejora' => $this->faker->numberBetween(1,137),
            'descripcionMPFD' => $this->faker->sentence(),
            'porcentajeAvanceMPFD' => $this->faker->randomFloat(2, 0, 100)

        ];
    }
}
