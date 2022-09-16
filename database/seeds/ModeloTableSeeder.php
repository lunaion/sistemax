<?php

use App\Modelo;
use Illuminate\Database\Seeder;

class ModeloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Modelo::create([
                'name'=>'10B7',
                'mark_id'=>'2',
            ]);
        }
    }
}
