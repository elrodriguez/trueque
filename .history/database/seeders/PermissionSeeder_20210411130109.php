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
        array_push($permissions_public,Permission::create(['name' => 'Listar_productos']));
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleCustomer = Role::create(['name' => 'Customer']);
    }
}
