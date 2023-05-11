<?php

namespace Database\Factories;

use App\Models\estudiantes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\estudiantes>
 */
class estudiantesFactory extends Factory
{
    
    protected $model = estudiantes::class;

    public function definition(): array
    {
        return [
            
            'codigoEstudiante' => $this->faker->unique()->randomNumber(),
            'nombresEstudiante' => $this->faker->firstName(),
            'apellidopEstudiante' => $this->faker->lastName(),
            'apellidomEstudiante' => $this->faker->lastName(),
            'telefonoEstudiante' => $this->faker->unique()->numberBetween(900000000,999999999),
            'correoEstudiante' => $this->faker->companyEmail()

        ];
    }
}
