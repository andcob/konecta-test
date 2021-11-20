<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Roles;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => 'Andres Cobos', 
            'email' => 'andrescobosreyes@gmail.com', 
            'password' => bcrypt('12345678'), 
        ]);

        $rol = Role::create([
            'name' => 'Super Administrador',
        ]);

        $permisos = Permission::pluck('id', 'id')->all();

        $rol->syncPermissions($permisos);

        $usuario->assignRole([$rol->id]);
    }
}
