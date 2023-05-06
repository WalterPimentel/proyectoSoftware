<?php

namespace Database\Factories;

use App\Models\responsables_cpi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\responsables_cpi>
 */
class responsables_cpiFactory extends Factory
{
    
    protected $model = responsables_cpi::class;
    
    public function definition(): array
    {
        return [

            'codigoResponsable' => $this->faker->unique()->randomNumber(),
            'nombresResponsable'=> $this->faker->name(),
            'apellidopResponsable' => $this->faker->lastName(),
            'apellidomResponsable' => $this->faker->lastName(),
            'cargoResponsable' => $this->faker->randomElement(['Coordinador PI', 'Analista PI', 'Especialista Seguimiento', 
                                                                'Coordinador Estratégico', 'Coordinador Proyectos', 'Especialista Datos']),
            'areaResponsable'  => $this->faker->sentence(),
            'telefonoResponsable' => $this->faker->unique()->numberBetween(900000000,999999999), //->phoneNumber('') //numeros no locales es-pe (no es de Perú)
            'correoResponsable' => $this->faker->unique()->safeEmail(),

        ];
    }
}
