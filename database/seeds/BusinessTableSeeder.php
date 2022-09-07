<?php

use App\Business;
use Illuminate\Database\Seeder;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name'=>'Sistemax',
            'description'=>'Descripción Sistemax',
            'logo'=>'sistemax.png',
            'email'=>'test@test.com',
            'address'=>'Calle 1 # 2 - 3',
            'nit'=>'12345678',
        ]);
    }
}
