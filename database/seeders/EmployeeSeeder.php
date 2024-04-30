<?php

namespace Database\Seeders;

use App\Models\DeliveryEmployee;
use App\Models\Employee;
use App\Models\SalesEmployee;
use App\Models\StandardContract;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
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

        foreach (range(1, 50) as $test) {
            $employee = [
                'FirstName' => $faker->firstName(),
                'LastName' => $faker->lastName(),
                'Phone' => $faker->phoneNumber(),
                'Email' => $faker->email(),
                'DateOfBirth' => $faker->date('Y-m-d', now()->subYears(15)),
                'TFN' => $faker->phoneNumber()
            ];

            $employee = Employee::create($employee);

            if (array_rand([0,1]) == 0) {
                SalesEmployee::create([
                    'EmployeeID' => $employee->EmployeeID,
                    'TFN' => $employee->TFN,
                ]);
            } else {
                DeliveryEmployee::create([
                    'EmployeeID' => $employee->EmployeeID,
                    'ABN' => $faker->phoneNumber(),
                ]);
            }
        }
    }
}
