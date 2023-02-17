<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name' => 'Seymour Skinner',
            'email' => 'teacher@springfield.com',
        ]);

        //$rol= Role::create(['name'=> 'Administrador']);

        //$permissions = Permission::pluck('id', 'id')->all();

        //$rol->syncPermissions($permissions);

        $user->assignRole(['Admin']);
    }
}