<?php

namespace Database\Factories;

use App\Models\tdr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tdr>
 */
class tdrFactory extends Factory
{
    protected $model = tdr::class;

    public function definition(): array
    {
        return [
            
            'idTipoRecurso' => $this->faker->numberBetween(1,2),
            'mayorCuantiaTDR' => $this->faker->boolean(),            
            'descripcionTDR' => $this->faker->sentence(),
            'costoTDR' => $this->faker->randomFloat(2, 1, 9999)

        ];
    }
}
