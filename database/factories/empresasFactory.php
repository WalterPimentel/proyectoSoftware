<?php

namespace Database\Factories;

use App\Models\empresas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\empresas>
 */
class empresasFactory extends Factory
{
    
    protected $model = empresas::class;
    
    public function definition(): array
    {
        return [
            
            'nombreEmpresa' => $this->faker->company(),
            'encargadoEmpresa' => $this->faker->unique()->name(),
            'rubroEmpresa' => $this->faker->randomElement(['Alimentación', 'Automotriz', 'Construcción', 'Salud',
                                                            'Educación', 'Energía', 'Finanzas', 'Tecnología']),
            'direccionEmpresa' =>$this->faker->unique()->streetAddress(),
            'telefonoEmpresa' => $this->faker->unique()->numberBetween(900000000,999999999),

        ];
    }
}
