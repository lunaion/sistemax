<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Usuarios
        Permission::create([
            'name'=>'Navegar usuarios',
            'slug'=>'users.index',
            'description'=>'Lista y navega por todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de usuarios',
            'slug'=>'users.show',
            'description'=>'Ver en detalle cada usurio del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de usuarios',
            'slug'=>'users.edit',
            'description'=>'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de usuarios',
            'slug'=>'users.create',
            'description'=>'Crear cualquier dato de una usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar usuarios',
            'slug'=>'users.destroy',
            'description'=>'Eliminar cualquier dato de un usuario del sistema',
        ]);

        // Roles
        Permission::create([
            'name'=>'Navegar roles',
            'slug'=>'roles.index',
            'description'=>'Lista y navega por todos los roles del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de roles',
            'slug'=>'roles.show',
            'description'=>'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de roles',
            'slug'=>'roles.edit',
            'description'=>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de roles',
            'slug'=>'roles.create',
            'description'=>'Crear cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar roles',
            'slug'=>'roles.destroy',
            'description'=>'Eliminar cualquier dato de un rol del sistema',
        ]);

        // Categorias
        Permission::create([
            'name'=>'Navegar categorías',
            'slug'=>'categories.index',
            'description'=>'Lista y navega por todos las categorías del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de categoría',
            'slug'=>'categories.show',
            'description'=>'Ver en detalle cada categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de categorías',
            'slug'=>'categories.edit',
            'description'=>'Editar cualquier dato de una categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de categorías',
            'slug'=>'categories.create',
            'description'=>'Crear cualquier dato de una categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar categorías',
            'slug'=>'categories.destroy',
            'description'=>'Eliminar cualquier dato de una categoría del sistema',
        ]);

        // Ciudades
        Permission::create([
            'name'=>'Navegar ciudades',
            'slug'=>'cities.index',
            'description'=>'Lista y navega por todos las ciudades del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de ciudades',
            'slug'=>'cities.show',
            'description'=>'Ver en detalle cada ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de ciudades',
            'slug'=>'cities.edit',
            'description'=>'Editar cualquier dato de una ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de ciudades',
            'slug'=>'cities.create',
            'description'=>'Crear cualquier dato de una ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar ciudades',
            'slug'=>'cities.destroy',
            'description'=>'Eliminar cualquier dato de una ciudad del sistema',
        ]);

        // Reportes
        Permission::create([
            'name'=>'Reporte por día',
            'slug'=>'reports.day',
            'description'=>'Permite ver los reportes de ventas por día.',
        ]);
        Permission::create([
            'name'=>'Reporte por fechas',
            'slug'=>'reports.date',
            'description'=>'Permite ver los reportes por rango de fechas de las ventas',
        ]);
    }
}
