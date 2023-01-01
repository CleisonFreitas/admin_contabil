<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $supplierPermission = Permission::Where('name', 'like', '%suppliers%')->get();

        if ($supplierPermission->count() < 1) {
            Permission::create(['guard_name' => 'api', 'name' => 'view suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'create suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'edit suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'update suppliers']);
            Permission::create(['guard_name' => 'api', 'name' => 'delete suppliers']);
        }


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['guard_name' => 'api','name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());
    }
}
