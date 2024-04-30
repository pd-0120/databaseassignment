<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\en_AU\Address($faker));
        $faker->addProvider(new \Faker\Provider\en_AU\PhoneNumber($faker));

        $customers = [];
        foreach(range(1,50) as $test) {
            array_push($customers, [
                'FirstName' => $faker->firstName(),
                'LastName' => $faker->lastName(),
                'Address' => $faker->address(),
                'Phone' => $faker->phoneNumber(),
                'Email' => $faker->email(),
                'DateOfBirth' => $faker->date('Y-m-d', now()->subYears(15))
            ]);
        }

        Customer::insert($customers);
    }
}
