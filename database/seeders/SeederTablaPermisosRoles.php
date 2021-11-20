<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie for Permissions and Roles
use Spatie\Permission\Models\Permission;


class SeederTablaPermisosRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
