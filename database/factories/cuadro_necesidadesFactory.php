<?php

namespace Database\Factories;

use App\Models\cuadro_necesidades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cuadro_necesidades>
 */
class cuadro_necesidadesFactory extends Factory
{
    
    protected $model = cuadro_necesidades::class;
    
    public function definition(): array
    {
        return [
            
            'idTDR' => $this->faker->numberBetween(1,50),
            'idResponsableEnviado' => $this->faker->numberBetween(1,5),
            'areaCuadroNecesidades' => $this->faker->sentence(),
            'estadoCuadroNecesidades' => $this->faker->numberBetween(-128,127),

        ];
    }
}
