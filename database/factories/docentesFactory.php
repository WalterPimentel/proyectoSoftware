<?php

namespace Database\Factories;

use App\Models\docentes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\docentes>
 */
class docentesFactory extends Factory
{
    
    protected $model = docentes::class;
    
    public function definition(): array
    {
        return [
            
            'codigoDocente' => $this->faker->unique()->randomNumber(),
            'nombresDocente' => $this->faker->name(),
            'apellidopDocente' =>$this->faker->lastName(),
            'apellidomDocente' =>$this->faker->lastName(),
            'telefonoDocente' => $this->faker->unique()->numberBetween(900000000,999999999),
            'correoDocente' => $this->faker->unique()->companyEmail()

        ];
    }
}
