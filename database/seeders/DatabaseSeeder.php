<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Score;
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


        // Score::factory()->create([
            
        //     'id_students' => '1',
        //     'academicYear' => '2022/2023',
        //     'Course' => '1',
        //     'subject' => 'maths',
        //     'quarter' => '1',
        //     'mark1' => '10',
        //     'mark2' => '9',
        //     'mark3' => '9',
        // ]);

        // Score::factory()->create([
            
        //     'id_students' => '2',
        //     'academicYear' => '2022/2023',
        //     'Course' => '1',
        //     'subject' => 'maths',
        //     'quarter' => '1',
        //     'mark1' => '5',
        //     'mark2' => '6',
        //     'mark3' => '4',
        // ]);

        // Score::factory(5)->create();

    }

}
