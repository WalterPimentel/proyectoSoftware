<?php

namespace Database\Factories;

use App\Models\Practica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practica>
 */
class PracticaFactory extends Factory
{

    protected $model = Practica::class;

    public function definition(): array
    {
        return [
            //crea un valor unico de numero aleatorio de 1 al límite de enteros
            'Codigo' => $this->faker->unique()->randomNumber(),
            //forma de crear un numero aleatorio entre dos valores
            'idEstudiante' => $this->faker->numberBetween(1,100),
            'idDocente' => $this->faker->numberBetween(1,20),
            'idEmpresa' => $this->faker->numberBetween(1,50),        
            'idEtapa' => $this->faker->numberBetween(1,3),
            //forma de crear una oracion
            'Titulo' => $this->faker->sentence(),
        ];
        /*Aqui algunas propiedades mas
            $this->faker->paragraph() //rellenar con un párrafo
            $this->faker->randomElement('Desarrollo web', 'Diseño web') //rellenar entre dos valores*/
    }
}
