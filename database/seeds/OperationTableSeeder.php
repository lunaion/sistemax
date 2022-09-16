<?php

use App\Operation;
use Illuminate\Database\Seeder;

class OperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operation::create([
            'name'=>'Bancolombia CBZ',
            'city_id'=>'2',
            'sede_id'=>'1',
        ]);
    }
}
