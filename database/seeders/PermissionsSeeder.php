<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions
        $allPermissions = [
            'jobs' => ['viewAny', 'view', 'create', 'update', 'delete'],
            'roles' => ['viewAny', 'view', 'create', 'update', 'delete'],
            'users' => ['viewAny', 'view', 'create', 'update', 'delete'],
        ];

        foreach ($allPermissions as $group => $permissions) {
            foreach ($permissions as $permission) {
                Permission::updateOrCreate([
                    //    'group' => $group,
                    'name' => "$permission " . Str::singular($group),
                    'guard_name' => 'web',
                ]);
            }
        }

        // Create Role
        $role = Role::updateOrCreate([
            'name' => 'admin',
        ]);
        $role->givePermissionTo(Permission::all());

        // Create User
        $user = User::firstOrCreate([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ],[
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);


        $user->assignRole($role);
    }
}
