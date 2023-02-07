<?php

namespace Database\Seeders\DatabaseSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

/* use App\Models\Student; */
use Illuminate\Database\Seeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\ScoreSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(StudentSeeder::class);
        $this->call(ScoreSeeder::class);
       
    }

}
