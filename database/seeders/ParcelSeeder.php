<?php

namespace Database\Seeders;

use App\Models\Parcel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParcelSeeder extends Seeder
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

        $parcels = [];
        $types = ['Small', 'Medium', 'Large'];

        foreach(range(1,200) as $test) {
            array_push($parcels, [
                'ParcelType' => $types[rand(0,2)],
                'Length' => rand(20,40),
                'Width' => rand(20, 40),
                'Height' => rand(10, 20),
                'ReceiverName' => $faker->name(),
                'ReceiverAddress' => $faker->address(),
                'ReceiverPhone' => $faker->phoneNumber(),
                'ContractID' => rand(1,50)
            ]);

        }
        Parcel::insert($parcels);
    }
}
