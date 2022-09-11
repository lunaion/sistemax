<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Incidente',
            'description'=>'Reportes de incidentes por medio de tickets OTRS',
        ]);

        Category::create([
            'name'=>'Requerimiento',
            'description'=>'Requirimientos generados por tickets OTRS',
        ]);

        Category::create([
            'name'=>'Otro',
            'description'=>'Cualquier otro tipo de categoría',
        ]);
    }
}
