<?php

use App\Printer;
use Illuminate\Database\Seeder;


class PrinterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Printer::create([
            'name'=>'AURES ODP-333',
        ]);
    }
}
