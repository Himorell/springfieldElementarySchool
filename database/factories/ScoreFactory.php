<?php

namespace Database\Factories;
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
            // 'id_students' => $this->biasedNumberBetween($min = 1, $max = 7, $function = 'sqrt'),
            // 'academicYear' => $this->faker->name(),
            // 'Course' => $this->faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
            // 'subject' => $this->faker->name(),
            // 'quarter' => $this->faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
            // 'mark1' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            // 'mark2' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            // 'mark3' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            // 'average' => $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqtr'),
        ];
    }
}
