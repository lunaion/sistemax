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
            'name'=>'Navegar por usuarios',
            'slug'=>'users.index',
            'description'=>'Lista y navega por todos los usuarios del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de usuario',
            'slug'=>'users.show',
            'description'=>'Ver en detalle cada usurio del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de usuarios',
            'slug'=>'users.edit',
            'description'=>'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de usuario',
            'slug'=>'users.create',
            'description'=>'Crear un nuevo usuario del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar usuario',
            'slug'=>'users.destroy',
            'description'=>'Eliminar un usuario del sistema',
        ]);

        // Roles
        Permission::create([
            'name'=>'Navegar por roles',
            'slug'=>'roles.index',
            'description'=>'Lista y navega por todos los roles del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de rol',
            'slug'=>'roles.show',
            'description'=>'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de rol',
            'slug'=>'roles.edit',
            'description'=>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de rol',
            'slug'=>'roles.create',
            'description'=>'Crear un nuevo rol del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar roles',
            'slug'=>'roles.destroy',
            'description'=>'Eliminar un rol del sistema',
        ]);

        // Categorias
        Permission::create([
            'name'=>'Navegar por categorías',
            'slug'=>'categories.index',
            'description'=>'Lista y navega por todos las categorías del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de categoría',
            'slug'=>'categories.show',
            'description'=>'Ver en detalle cada categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de categoría',
            'slug'=>'categories.edit',
            'description'=>'Editar cualquier dato de una categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de categoría',
            'slug'=>'categories.create',
            'description'=>'Crear una nueva categoría del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar categoría',
            'slug'=>'categories.destroy',
            'description'=>'Eliminar una categoría del sistema',
        ]);

        // Ciudades
        Permission::create([
            'name'=>'Navegar por ciudades',
            'slug'=>'cities.index',
            'description'=>'Lista y navega por todas las ciudades del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de ciudad',
            'slug'=>'cities.show',
            'description'=>'Ver en detalle cada ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de ciudad',
            'slug'=>'cities.edit',
            'description'=>'Editar cualquier dato de una ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de ciudad',
            'slug'=>'cities.create',
            'description'=>'Crear una nueva ciudad del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar ciudad',
            'slug'=>'cities.destroy',
            'description'=>'Eliminar una ciudad del sistema',
        ]);

        // Marcas
        Permission::create([
            'name'=>'Navegar por marcas ',
            'slug'=>'marks.index',
            'description'=>'Lista y navega por todas las marcas del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de marca',
            'slug'=>'marks.show',
            'description'=>'Ver en detalle cada marca del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de marca',
            'slug'=>'marks.edit',
            'description'=>'Editar cualquier dato de una marca del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de marca',
            'slug'=>'marks.create',
            'description'=>'Crear una nueva marca del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar marca',
            'slug'=>'marks.destroy',
            'description'=>'Eliminar una marca del sistema',
        ]);

        // Modelos
        Permission::create([
            'name'=>'Navegar por modelos',
            'slug'=>'modelos.index',
            'description'=>'Lista y navega por todos los modelos del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de modelo',
            'slug'=>'modelos.show',
            'description'=>'Ver en detalle cada modelo del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de modelo',
            'slug'=>'modelos.edit',
            'description'=>'Editar cualquier dato de un modelo del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de modelo',
            'slug'=>'modelos.create',
            'description'=>'Crear un nuevo modelo del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar modelo',
            'slug'=>'modelos.destroy',
            'description'=>'Eliminar un modelo del sistema',
        ]);

        // Operaciones
        Permission::create([
            'name'=>'Navegar por operaciones',
            'slug'=>'operations.index',
            'description'=>'Lista y navega por todas las operaciones del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de operación',
            'slug'=>'operations.show',
            'description'=>'Ver en detalle cada operación del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de operación',
            'slug'=>'operations.edit',
            'description'=>'Editar cualquier dato de una operacipón del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de operación',
            'slug'=>'operations.create',
            'description'=>'Crear un nueva operación del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar operación',
            'slug'=>'operations.destroy',
            'description'=>'Eliminar una operación del sistema',
        ]);

        // Partes
        Permission::create([
            'name'=>'Navegar por partes',
            'slug'=>'parts.index',
            'description'=>'Lista y navega por todas las partes del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de parte',
            'slug'=>'parts.show',
            'description'=>'Ver en detalle cada parte del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de parte',
            'slug'=>'parts.edit',
            'description'=>'Editar cualquier dato de una parte del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de parte',
            'slug'=>'parts.create',
            'description'=>'Crear una nueva parte del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar parte',
            'slug'=>'parts.destroy',
            'description'=>'Eliminar una parte del sistema',
        ]);

        // Proveedor
        Permission::create([
            'name'=>'Navegar por proveedores',
            'slug'=>'providers.index',
            'description'=>'Lista y navega por todos los proveedores del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de proveedor',
            'slug'=>'providers.show',
            'description'=>'Ver en detalle cada proveedor del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de proveedor',
            'slug'=>'providers.edit',
            'description'=>'Editar cualquier dato de un proveedor del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de proveedor',
            'slug'=>'providers.create',
            'description'=>'Crear un nuevo proveedor del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar proveedor',
            'slug'=>'providers.destroy',
            'description'=>'Eliminar un proveedor del sistema',
        ]);

        // Sedes
        Permission::create([
            'name'=>'Navegar por sedes',
            'slug'=>'sedes.index',
            'description'=>'Lista y navega por todas las sedes del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de sede',
            'slug'=>'sedes.show',
            'description'=>'Ver en detalle cada sede del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de sede',
            'slug'=>'sedes.edit',
            'description'=>'Editar cualquier dato de una sede del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de sede',
            'slug'=>'sedes.create',
            'description'=>'Crear una nueva sede del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar sede',
            'slug'=>'sedes.destroy',
            'description'=>'Eliminar una sede del sistema',
        ]);

        // Tipos
        Permission::create([
            'name'=>'Navegar por tipos',
            'slug'=>'types.index',
            'description'=>'Lista y navega por todos los tipos del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de tipo',
            'slug'=>'types.show',
            'description'=>'Ver en detalle cada tipo del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de tipo',
            'slug'=>'types.edit',
            'description'=>'Editar cualquier dato de un tipo del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de tipo',
            'slug'=>'types.create',
            'description'=>'Crear un nuevo tipo del sistema',
        ]);
        Permission::create([
            'name'=>'Eliminar tipo',
            'slug'=>'types.destroy',
            'description'=>'Eliminar un tipo del sistema',
        ]);

        // Garantías
        Permission::create([
            'name'=>'Navegar por garantías',
            'slug'=>'warranties.index',
            'description'=>'Lista y navega por todas las garantías del sistema',
        ]);
        Permission::create([
            'name'=>'Ver detalle de garantía',
            'slug'=>'warranties.show',
            'description'=>'Ver en detalle cada garabtía del sistema',
        ]);
        Permission::create([
            'name'=>'Edición de garantía',
            'slug'=>'warranties.edit',
            'description'=>'Editar cualquier dato de una garantía del sistema',
        ]);
        Permission::create([
            'name'=>'Creación de garantía',
            'slug'=>'warranties.create',
            'description'=>'Crear una nueva garantía del sistema',
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

        // Change
        Permission::create([
            'name'=>'Cambiar estado de la garantía',
            'slug'=>'change.status.warranties',
            'description'=>'Permite cambiar el esatdo de la ganrantía.',
        ]);

    }
}
