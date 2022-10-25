<?php

use App\Provider;
use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provider::create([
            'name'=>'Konecta',
            'email'=>'konecta@konecta.com',
            'nit_number'=>'12345678',
            'address'=>'Calle konecta # 1 - 2',
            'phone'=>'1234567',
        ]);

        Provider::create([
            'name'=>'Alquilados',
            'email'=>'alquilados@alquilados.com',
            'nit_number'=>'123456789',
            'address'=>'Calle alquilados # 1 - 2',
            'phone'=>'12345678',
        ]);
    }
}
