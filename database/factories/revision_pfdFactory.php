<?php

namespace Database\Factories;

use App\Models\revision_pfd;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\revision_pfd>
 */
class revision_pfdFactory extends Factory
{
    protected $model = revision_pfd::class;

    public function definition(): array
    {
        return [

            'descripcionRPFD' => $this->faker->sentence(),
            'ovserbacionesRPFD' => $this->faker->sentence(),
            
        ];
    }
}
