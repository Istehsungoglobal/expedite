<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Create Super Admin
        $superadmin = User::factory()->create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'email' => 'super@admin.com',
        ]);
        $superadmin->assignRole('Super Admin');

        // Create users with different roles
        $roles = [
            'Admin',
            'Customer',
            'Support Team',
            'Technical Team',
            'Sales Team',
        ];

        collect($roles)->each(function ($role) {
            $user = User::factory()->create([
                'first_name' => $role,
                'email' => Str::slug($role, '_').'@admin.com',
            ]);
            $user->assignRole($role);
        });
    }
}
