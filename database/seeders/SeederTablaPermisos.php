<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla post
            'ver-post',
            'crear-post',
            'editar-post',
            'borrar-post',
            // categorias
            'ver-category',
            'crear-category',
            'editar-category',
            'borrar-category',
            //administrador con roles y usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-pusuarios',
            'borrar-usuarios',
            

        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
