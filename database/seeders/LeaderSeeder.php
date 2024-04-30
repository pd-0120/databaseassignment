<?php

namespace Database\Seeders;

use App\Models\Lead;
use Illuminate\Database\Seeder;

class LeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $leads = [];

        foreach(range(1,50) as $data) {
            $lead = [
                'DateRecorded' => $faker->date(),
                'ParcelEnquiry' => array_rand([0,1]) == 1 ? "Yes" : "No",
                'CustomerID' => rand(1,50),
                'EmployeeID' => rand(1, 50)
            ];

            array_push($leads, $lead);
        }

        Lead::insert($leads);
    }
}
