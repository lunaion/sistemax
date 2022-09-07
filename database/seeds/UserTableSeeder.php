<?php

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Role::create([
                'name'=>'Admin',
                'slug'=>'admin',
                'special'=>'all-access',
            ]);
    
            $user = User::create([
                'name'=>'Test',
                'email'=>'test@test.com',
                'password'=>'$2y$10$rlKJtSG5IQhX3kk.fZkcXe4WkA8SRv351Z8Mp.Cv1PGlLwKqIulfm',
            ]);
    
            $user->roles()->sync(1);
        }
    }
}
