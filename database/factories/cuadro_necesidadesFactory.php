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
            
            'idComision' => $this->faker->numberBetween(1,1),
            'idTipoRecurso' => $this->faker->numberBetween(1,2),
            'idTipoCosto' => $this->faker->numberBetween(1,1),
            'idTDR' => $this->faker->numberBetween(1,25),
            'descripcionCuadroN' => $this->faker->sentence(),
            'cantidadCuadroN' => $this->faker->numberBetween(1,74),
            'precioCuadroN' => $this->faker->randomFloat(2, 1,9999)

        ];
    }
}
