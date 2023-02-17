<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Score;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class);
        
        User::factory()->create([
            'name' => 'Lisa Simpson',
            'email' => 'lisa@springfield.com',
            'image' => 'https://7televalencia.com/wp-content/uploads/2019/04/lisasimpsonnok.jpg',
        ])->assignRole('Student');

        User::factory()->create([
            'name' => 'Bart Simpson',
            'email' => 'bart@springfield.com',
            'image' => 'https://comodibujarclub.com/wp-content/uploads/2020/10/dibujar-a-bart-simpson.png',
        ])->assignRole('Student');

        User::factory()->create([
            'name' => 'Milhouse Van Houten',
            'email' => 'milhouse@springfield.com',
            'image' => 'https://www.prensalibre.com/wp-content/uploads/2021/06/milhouse-02.png',
        ])->assignRole('Student');
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Seymour Skinner',
            'email' => 'teacher@springfield.com',
        ])->assignRole('teacher');

        // User::factory(5)->create();

    }

}
