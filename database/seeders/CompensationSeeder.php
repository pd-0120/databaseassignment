<?php

namespace Database\Seeders;

use App\Models\CompensationClaim;
use App\Models\ParcelDelivery;
use Illuminate\Database\Seeder;

class CompensationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parcelDeliveries = ParcelDelivery::whereIn('DeliveryStatus', ["Lost"])->get();
        $claimReasons = [
            'Parcel did not received',
            'Parcel has not reachable',
            'Wrong parcel receieve',
            'Refund',
        ];
        $compensations = [];

        foreach($parcelDeliveries as $parcelDelivery) {
            $Invoice = $parcelDelivery->Invoice;
            $compensation = [
                'CustomerID' => $Invoice->CustomerID,
                'ParcelID' => $parcelDelivery->ParcelID,
                'ClaimAmount' => $Invoice->InvoiceAmount - $Invoice->DiscountAmount,
                'ClaimReason' => $claimReasons[array_rand($claimReasons)]
            ];

            array_push($compensations, $compensation);
        }

        CompensationClaim::insert($compensations);
    }
}
