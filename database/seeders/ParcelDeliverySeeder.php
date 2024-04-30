<?php

namespace Database\Seeders;

use App\Models\DeliveryEmployee;
use App\Models\Parcel;
use App\Models\ParcelDelivery;
use Illuminate\Database\Seeder;

class ParcelDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deliveryEmployees = DeliveryEmployee::select('EmployeeID')->get()->toArray();

        $parcels = Parcel::all();
        $deliveryStatusArray = ['Delivered', 'Lost', 'Damaged'];

        foreach($parcels as $parcel) {
            $ParcelID = $parcel->ParcelID;
            $DeliveryDate = \Carbon\Carbon::today()->subDays(rand(0,365))->toDateString();
            $DeliveryStatus = $deliveryStatusArray[array_rand($deliveryStatusArray)];
            $NumberOfAttempts = rand(1,2);
            $EmployeeID = $deliveryEmployees[array_rand($deliveryEmployees)]['EmployeeID'];

            ParcelDelivery::create([
                'ParcelID' => $ParcelID,
                'DeliveryDate' => $DeliveryDate,
                'DeliveryStatus' => $DeliveryStatus,
                'NumberOfAttempts' => $NumberOfAttempts,
                'EmployeeID' => $EmployeeID
            ]);
        }
    }

}
