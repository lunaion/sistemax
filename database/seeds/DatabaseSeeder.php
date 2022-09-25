<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BusinessTableSeeder::class);
        $this->call(PrinterTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(SedeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(MarkTableSeeder::class);
        $this->call(ModeloTableSeeder::class);
        $this->call(PartTableSeeder::class);
        $this->call(ProviderTableSeeder::class);
        $this->call(OperationTableSeeder::class);
        $this->call(TypeTableSeeder::class);
    }
}
