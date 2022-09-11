<?php

use App\Mark;
use Illuminate\Database\Seeder;

class MarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::create([
            'name'=>'Hewlett Packard',
            'description'=>'Fabricante hewlett packard',
        ]);

        Mark::create([
            'name'=>'Lenovo',
            'description'=>'Fabricante lenovo',
        ]);

        Mark::create([
            'name'=>'Dell',
            'description'=>'Fabricante dell',
        ]);
    }
    
}
