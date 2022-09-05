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
    }
}
