<?php

namespace Database\Seeders;

use App\Models\Contract;
use App\Models\Customer;
use App\Models\NonStandardContract;
use App\Models\StandardContract;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $customers = Customer::all();

        foreach($customers as $customer) {
            $contract = [
                'CustomerID' => $customer->CustomerID,
                'ContractType' => array_rand([0,1]) == 0 ? "Standard" : "NonStandard",
                'ContractValue' => rand(5000, 50000),
                'StartDate'=> Carbon::today()->subYears(2)->subDays(rand(0, 365))->toDateString(),
                'EndDate' => Carbon::today()->subYears(1)->subDays(rand(0, 365))->toDateString(),
                'EmployeeID' => rand(1,50)
            ];

            $contract = Contract::create($contract);

            if($contract->ContractType == "Standard") {
                StandardContract::create([
                    'ContractID' => $contract->ContractID,
                    'FixedPricing' => $contract->ContractValue
                ]);
            } else {
                NonStandardContract::create([
                    'ContractID' => $contract->ContractID,
                    'DiscountPercentage' => rand(5, 30)
                ]);
            }
        }
    }
}
