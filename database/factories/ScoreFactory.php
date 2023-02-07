<?php

namespace Database\Factories\ScoreFactory;

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
            'quarter' =>$this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'mark1' =>$this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'mark2' =>$this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'mark3' =>$this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),

            'course' => $this->faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
		    'academicYear' => $this->faker->name(),
        ];
    }
}
