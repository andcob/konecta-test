<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie for Permissions and Roles
use Spatie\Permission\Models\Permission;


class SeederTablaPermisosUsuarios extends Seeder
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
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
        ];

        foreach($permisos as $permiso) {
            Permission::create(['name'=>$permiso]);
        }
    }
}
