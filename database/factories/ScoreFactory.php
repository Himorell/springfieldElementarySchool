<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
		    'subject' =>$this->faker->name(),
            'quarter' =>$this->faker->biasedNumberBetween($min = 1, $max = 10),
            'mark1' =>$this->faker->biasedNumberBetween($min = 1, $max = 10),
            'mark2' =>$this->faker->biasedNumberBetween($min = 1, $max = 10),
            'mark3' =>$this->faker->biasedNumberBetween($min = 1, $max = 10),

            'course' => $this->faker->biasedNumberBetween($min = 1, $max = 3),
		    'academicYear' => $this->faker->name(),
        ];
    }
}
