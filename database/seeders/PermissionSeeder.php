<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_public = [];
        $permissions_admin = [];

        array_push($permissions_public,Permission::create(['name' => 'Listar_productos']));
        array_push($permissions_admin,Permission::create(['name' => 'dashboard']));
        array_push($permissions_admin,Permission::create(['name' => 'users']));

        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleCustomer = Role::create(['name' => 'Customer']);

        $roleAdmin->syncPermissions($permissions_admin);

        $roleCustomer->syncPermissions($permissions_public);
    }
}
