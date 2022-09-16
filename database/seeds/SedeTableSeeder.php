<?php

use App\Sede;
use Illuminate\Database\Seeder;

class SedeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Sede::create([
                'name'=>'CEOH',
                'address'=>'Avenida Guayabal',
                'phone'=>'1234567',
                'email'=>'ceoh@ceoh.com',
                'city_id'=>'2',
                'user_id'=>'1',
            ]);
        }
    }
}
