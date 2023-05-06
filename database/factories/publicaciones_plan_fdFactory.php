<?php

namespace Database\Factories;

use App\Models\publicaciones_plan_fd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\publicaciones_plan_fd>
 */
class publicaciones_plan_fdFactory extends Factory
{
    
    protected $model = publicaciones_plan_fd::class;

    public function definition(): array
    {
        return [
            
            'idActaAprobacion' => $this->faker->numberBetween(1,50),
            'idCronograma' => $this->faker->numberBetween(1,50),
            'estadoPublicacionPlanFD' => $this->faker->numberBetween(-128,127),

        ];
    }
}
