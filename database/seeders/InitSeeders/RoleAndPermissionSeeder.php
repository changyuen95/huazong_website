<?php

namespace Database\Seeders\InitSeeders;

use App\Library\RoleTag;
use App\Library\PermissionTag;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // create permissions
        $permissions = collect(PermissionTag::getAllPermissions())->map(function ($item) {
            return [
                'name' => $item,
                'guard_name' => 'web',
            ];
        });

        Permission::insert($permissions->toArray());

        // create roles and assign existing permissions
        $role = Role::create([
            'name' => RoleTag::ADMIN
        ]);
        $role->givePermissionTo([
            PermissionTag::PERMISSION_FOR_ADMIN,
        ]);

        $role = Role::create(['name' => RoleTag::SUPER_ADMIN]);
        $role->givePermissionTo([
            PermissionTag::PERMISSION_FOR_SUPER_ADMIN
        ]);
    }
}
