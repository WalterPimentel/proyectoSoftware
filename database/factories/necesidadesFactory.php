<?php

namespace Database\Factories;

use App\Models\necesidades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\necesidades>
 */
class necesidadesFactory extends Factory
{
    
    protected $model = necesidades::class;
    
    public function definition(): array
    {
        return [
            
            'areaNecesidades' => $this->faker->sentence(),
            'descripcionNecesidades' => $this->faker->sentence(),
            'fechaSolicitudNecesidades' => $this->faker->dateTimeBetween('-4 week', '-1 week'),

        ];
    }
}
