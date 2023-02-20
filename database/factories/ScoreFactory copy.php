<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
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
            'id_students' => $this->faker->integer(),
            'academicYear' => $this->faker->name(),
            'course' => $this->faker->integer(),
            'subject' => $this->faker->name(),
            'mark1' => $this->faker->integer(),
            'mark2' => $this->faker->integer(),
            'mark3' => $this->faker->integer(),

        ];
    }
}
