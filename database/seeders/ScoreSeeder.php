<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Score;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Score::factory()->create[(
        'id_students' => '1',

		'subject' => 'Maths',
        'quarter' => 'Second',
        'mark1' => '7',
        'mark2' => '6',
        'mark3' => '8',

        'course' => '2',
		'academicYear' => '2022-2023',
        )];
    }
}
