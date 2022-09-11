<?php

use App\Part;
use Illuminate\Database\Seeder;

class PartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Part::create([
            'name'=>'Disco Duro',
            'description'=>'Mecánico',
        ]);

        Part::create([
            'name'=>'Teclado',
            'description'=>'Teclado de escritorio',
        ]);

        Part::create([
            'name'=>'Memoria RAM 4GB DDR3',
            'description'=>'Memoria RAM DDR3',
        ]);
    }
}
