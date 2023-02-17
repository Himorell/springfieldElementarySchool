<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;

class seederTablePermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
                    //tabla roles
                    'see-rol',
                    'create-rol',
                    'edit-rol',
                    'delete-rol',
                    // tabla scores
                    'see-score',
                    'create-score',
                    'edit-score',
                    'delete-score',
                    //tabla user
                    'see-users',
                    'create-users',
                    'edit-users',
                    'delete-users',
                    ];
            
                    foreach($permissions as $permission) {
                        Permission::create(['name'=>$permission]);
                    }
    }
}
