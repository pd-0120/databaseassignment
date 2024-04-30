<?php

namespace Database\Seeders;

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
        $this->call([
            // CustomerSeeder::class,
            // EmployeeSeeder::class,
            // LeaderSeeder::class,
            // ContractSeeder::class,
            // ParcelSeeder::class,
        ]);
    }
}
