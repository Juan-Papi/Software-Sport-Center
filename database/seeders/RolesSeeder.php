<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Usuario',
            ],
            [
                'name' => 'Personal',
            ],
            [
                'name' => 'Proveedor',
            ],
        ];

        // Crear los roles en la base de datos
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
