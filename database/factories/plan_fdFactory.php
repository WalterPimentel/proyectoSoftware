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
        $fechaElaboracionPFD = $this->faker->dateTimeBetween('-25 years', 'now');
        $fechaAprobacionPFD = $this->faker->dateTimeBetween($fechaElaboracionPFD, 'now');

        return [
            
            'idComision' => $this->faker->numberBetween(1,10),
            'idCuadroNecesidades' => $this->faker->numberBetween(1,1),
            'idRevisionPFD' => $this->faker->numberBetween(1,25),
            'idActaConsejoFacultad' => $this->faker->numberBetween(1,25),
            'idResponsableElaboracion' => $this->faker->numberBetween(1,10),
            'idResponsableAprobacion' => $this->faker->numberBetween(1,4),
            'descripcionPFD' => $this->faker->sentence(),
            'fechaElaboracionPFD' => $fechaElaboracionPFD,
            'fechaAprobacionPFD' => $fechaAprobacionPFD,
            'yearPFD' => $fechaAprobacionPFD->format('Y')

        ];
    }
}
