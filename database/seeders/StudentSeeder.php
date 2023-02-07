<?php

namespace Database\Seeders\StudentSeeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Student::factory()->create([
            'name' => 'Lisa',
            'surname' => 'Simpson',
            'email' => 'lisa@mail.com',
            'image' => '',
        ]);

        Student::factory()->create([
            'name' => 'Bart',
            'surname' => 'Simpson',
            'email' => 'bart@mail.com',
            'image' => '',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Student::factory(5)->create();
    }
}
