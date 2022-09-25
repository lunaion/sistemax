<?php

use App\Type;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name'=>'CPU',
            'description'=>'Cualquier referencia y marca de CPU',
        ]);

        Type::create([
            'name'=>'Monitor',
            'description'=>'Cualquier referencia y marca de monitor',
        ]);

        Type::create([
            'name'=>'Periférico',
            'description'=>'Cualquier referencia y marca de periferico',
        ]);
    }
}
