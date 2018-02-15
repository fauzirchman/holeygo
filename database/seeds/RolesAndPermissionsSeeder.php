<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create a trip']);
        Permission::create(['name' => 'remove a trip']);
        Permission::create(['name' => 'join a trip']);
        Permission::create(['name' => 'invite someone to a trip']);
        Permission::create(['name' => 'upload trip photo']);
        Permission::create(['name' => 'save as favorite trip']);
        Permission::create(['name' => 'lead a trip']);
        Permission::create(['name' => 'define professional skill']);
        Permission::create(['name' => 'create a group']);
        Permission::create(['name' => 'edit a group']);
        Permission::create(['name' => 'remove group']);
        Permission::create(['name' => 'invite someone to a group']);
        Permission::create(['name' => 'remove someone from group']);
        Permission::create(['name' => 'update group profile']);
        Permission::create(['name' => 'create product']);
        Permission::create(['name' => 'edit product']);
        Permission::create(['name' => 'remove product']);
        Permission::create(['name' => 'create a promotion banner']);
        Permission::create(['name' => 'create product category']);

        // create roles and assign existing permissions
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('create a trip');
        $role->givePermissionTo('remove a trip');
        $role->givePermissionTo('join a trip');
        $role->givePermissionTo('invite someone to a trip');
        $role->givePermissionTo('upload trip photo');
        $role->givePermissionTo('save as favorite trip');
        $role->givePermissionTo('lead a trip');
        $role->givePermissionTo('define professional skill');
        $role->givePermissionTo('remove group');
        $role->givePermissionTo('invite someone to a group');
        $role->givePermissionTo('remove someone from group');
        $role->givePermissionTo('update group profile');
        $role->givePermissionTo('create product');
        $role->givePermissionTo('edit product');
        $role->givePermissionTo('remove product');
        $role->givePermissionTo('create a promotion banner');
        $role->givePermissionTo('create product category');

        $role = Role::create(['name' => 'premium']);
        $role->givePermissionTo('create a trip');
        $role->givePermissionTo('remove a trip');
        $role->givePermissionTo('join a trip');
        $role->givePermissionTo('invite someone to a trip');
        $role->givePermissionTo('upload trip photo');
        $role->givePermissionTo('save as favorite trip');
        $role->givePermissionTo('lead a trip');
        $role->givePermissionTo('define professional skill');
        $role->givePermissionTo('remove group');
        $role->givePermissionTo('invite someone to a group');
        $role->givePermissionTo('remove someone from group');
        $role->givePermissionTo('update group profile');
        $role->givePermissionTo('create product');
        $role->givePermissionTo('edit product');
        $role->givePermissionTo('remove product');
        $role->givePermissionTo('create a promotion banner');
        $role->givePermissionTo('create product category');

        $role = Role::create(['name' => 'free']);
        $role->givePermissionTo('create a trip');
        $role->givePermissionTo('remove a trip');
        $role->givePermissionTo('join a trip');
        $role->givePermissionTo('invite someone to a trip');
        $role->givePermissionTo('invite someone to a group');

        $role = Role::create(['name' => 'guest']);
        $role->givePermissionTo('create a trip');
        $role->givePermissionTo('remove a trip');
        $role->givePermissionTo('join a trip');
        $role->givePermissionTo('invite someone to a trip');
    }
}
