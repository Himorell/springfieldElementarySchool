<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
