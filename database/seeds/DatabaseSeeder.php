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
        $this->call(ProductTableSeeders::class); //Load seeder class yang telah dibuat
        $this->call(CustomerTableSeeder::class);
    }
}