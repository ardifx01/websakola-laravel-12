<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // List permissions
        $permissions = [
            'access dashboard',
            'manage users',
            'manage posts',
            'manage reports',
        ];

        // Buat permissions jika belum ada
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Buat roles
        $roles = [
            'superadmin' => $permissions, // semua akses
            'admin' => ['access dashboard', 'manage posts', 'manage reports'],
            'operator' => ['access dashboard'],
        ];

        foreach ($roles as $roleName => $rolePermissions) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($rolePermissions);
        }

        // Buat user Superadmin
        $user1 = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password123'),
            ]
        );
        $user1->assignRole('superadmin');

        // Buat user Admin
        $user2 = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Utama',
                'password' => Hash::make('password123'),
            ]
        );
        $user2->assignRole('admin');

        // Buat user Operator
        $user3 = User::firstOrCreate(
            ['email' => 'operator@example.com'],
            [
                'name' => 'Operator Sekolah',
                'password' => Hash::make('password123'),
            ]
        );
        $user3->assignRole('operator');
    }
}
