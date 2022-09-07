<?php

use App\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name'=>'Bogotá',
            'comment'=>'Departamento de Cundinamarca',
        ]);

        City::create([
            'name'=>'Medellín',
            'comment'=>'Departamento de Antioquia',
        ]);

        City::create([
            'name'=>'Montería',
            'comment'=>'Departamento de Cordoba',
        ]);
    }
}
