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
            'name'=>'Genérico',
            'email'=>'generico@generico.com',
            'nit_number'=>'12345678',
            'address'=>'Calle generico # 1 - 2',
            'phone'=>'1234567',
        ]);
    }
}
