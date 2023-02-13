<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleTeacher = Role::create(['name' => 'teacher']);
        $roleStudent = Role::create(['name' => 'student']);

        $permission = Permission::create(['name' => 'teacher.users.index'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.users.create'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.users.store'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.users.destroy'])->assignRole($roleTeacher);

        $permission = Permission::create(['name' => 'teacher.scores.index'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.scores.create'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.scores.store'])->assignRole($roleTeacher);
        $permission = Permission::create(['name' => 'teacher.scores.destroy'])->assignRole($roleTeacher);
    }
}
