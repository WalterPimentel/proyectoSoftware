<?php

namespace Database\Factories;

use App\Models\etapas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\etapas>
 */
class etapasFactory extends Factory
{
    
    protected $model = etapas::class;
    
    public function definition(): array
    {
        return [
            
            'nombreEtapa' => $this->faker->sentence(),
            'descripcionEtapa' => $this->faker->paragraph()

        ];
    }
}
