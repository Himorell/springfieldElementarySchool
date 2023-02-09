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
            'image' => 'https://7televalencia.com/wp-content/uploads/2019/04/lisasimpsonnok.jpg',
        ]);

        Student::factory()->create([
            'name' => 'Bart',
            'surname' => 'Simpson',
            'email' => 'bart@mail.com',
            'image' => 'https://comodibujarclub.com/wp-content/uploads/2020/10/dibujar-a-bart-simpson.png',
        ]);

        Student::factory()->create([
            'name' => 'Milhouse',
            'surname' => 'Van Houten',
            'email' => 'milhouse@mail.com',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2021/06/milhouse-02.png',
        ]);
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Seymour Skinner',
            'email' => 'teacher@springfield.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Lisa Simpson',
            'email' => 'lisa@springfield.com',
        ]); 


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
