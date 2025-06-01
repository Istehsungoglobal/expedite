<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

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
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $this->createOrUpdatePermissions();
        $this->createOrUpdateRoles();
    }

    /**
     * Create or update permissions
     *
     * @return void
     */
    private function createOrUpdatePermissions()
    {
        $permissions = [
            'dashboard' => ['access-dashboard', 'manage-dashboard'],
            'activity' => ['manage-activity', 'create-activity', 'edit-activity', 'destroy-activity'],
            'user' => ['manage-user', 'create-user', 'edit-user', 'destroy-user', 'impersonate-user', 'access-dashboard-user'],
            'permission' => ['manage-permission', 'create-permission', 'edit-permission', 'destroy-permission', 'change-permission'],
            'role' => ['manage-role', 'create-role', 'edit-role', 'destroy-role'],
            'subscribe-plan' => ['manage-subscribe-plan', 'create-subscribe-plan', 'edit-subscribe-plan', 'destroy-subscribe-plan'],
            'subscribed-user' => ['manage-subs-user', 'create-subs-user', 'edit-subs-user', 'destroy-subs-user'],
            'billing' => ['manage-billing', 'create-billing', 'edit-billing', 'destroy-billing'],
            'blog' => ['manage-blog', 'create-blog', 'edit-blog', 'destroy-blog'],
            'category' => ['manage-category', 'create-category', 'edit-category', 'destroy-category'],
            'knowledge-base' => ['manage-knowledge-base', 'create-knowledge-base', 'edit-knowledge-base', 'destroy-knowledge-base'],
            'support' => ['manage-support', 'create-support', 'edit-support', 'destroy-support'],
            'ads-plugin' => ['manage-ads', 'create-ads', 'edit-ads', 'destroy-ads'],
            'setting' => [
                'manage-setting', 'manage-system', 'manage-sms', 'manage-website', 'manage-school',
                'manage-payment', 'manage-language', 'manage-smtp', 'manage-about',
            ],
            'slider' => ['manage-slider', 'create-slider', 'edit-slider', 'destroy-slider'],
            'state' => ['manage-state', 'create-state', 'edit-state', 'destroy-state'],
            'llctype' => ['manage-llctype', 'create-llctype', 'edit-llctype', 'destroy-llctype'],
            'industry' => ['manage-industry', 'create-industry', 'edit-industry', 'destroy-industry'],
            'country' => ['manage-country', 'create-country', 'edit-country', 'destroy-country'],
        ];

        foreach ($permissions as $module => $names) {
            foreach ($names as $name) {
                Permission::updateOrCreate(
                    ['name' => $name],
                    [
                        'module' => $module,
                        'guard_name' => 'web',
                        'removable' => 0,
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }

    /**
     * Create or update roles and assign permissions
     *
     * @return void
     */
    private function createOrUpdateRoles()
    {
        $roles = [
            'Super Admin' => ['is_super' => true],
            'Admin' => ['assign_all' => true],
            'Customer' => [],
            'Support Team' => [],
            'Technical Team' => [],
            'Sales Team' => [],
        ];

        foreach ($roles as $name => $options) {
            $role = Role::updateOrCreate(
                ['name' => $name],
                [
                    'guard_name' => 'web',
                    'removable' => 0,
                    'updated_at' => now(),
                ]
            );

            // Assign all permissions to Admin if it doesn't have them already
            if (isset($options['assign_all']) && $options['assign_all']) {
                $permissions = Permission::all();
                foreach ($permissions as $permission) {
                    if (! $role->hasPermissionTo($permission)) {
                        $role->givePermissionTo($permission);
                    }
                }
            }

            // Super Admin has all permissions by default in Spatie's system
        }
    }
}
