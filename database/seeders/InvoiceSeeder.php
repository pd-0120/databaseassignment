<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\Parcel;
use App\Models\ParcelDelivery;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parcelDeliveries = ParcelDelivery::all();

        foreach($parcelDeliveries as $parcelDelivery) {
            $contract = $parcelDelivery->Parcel->Contract;
            $DiscountAmount = 0;

            $InvoiceAmount  = $contract->ContractValue;
            if($contract->ContractType != "Standard") {
                $NonStandardContract = $contract->NonStandardContract;
                $DiscountPercentage = $NonStandardContract->DiscountPercentage;
                $DiscountAmount = $InvoiceAmount/ $DiscountPercentage;
            }

            $InvoiceDate    = $parcelDelivery->DeliveryDate;
            $DueDate        = Carbon::parse($parcelDelivery->DeliveryDate)->addDays(30);
            $CustomerID     = $contract->CustomerID;
            $ParcelID       = $parcelDelivery->ParcelID;

            $invoice = [
                'InvoiceDate' => $InvoiceDate,
                'DueDate' => $DueDate,
                'InvoiceAmount' => $InvoiceAmount,
                'DiscountAmount' => $DiscountAmount,
                'CustomerID' => $CustomerID,
                'ParcelID' => $ParcelID
            ];

            $invoice = Invoice::create($invoice);

            Payment::create([
                'PaymentDate' => $invoice->DueDate,
                'AmountPayable' => $invoice->InvoiceAmount - $invoice->DiscountAmount,
                'CustomerID' => $invoice->CustomerID
            ]);
        }
    }
}
