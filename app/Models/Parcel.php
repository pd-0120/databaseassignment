<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $table = "Parcel";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ParcelID';

    protected $fillable = [
        'ParcelID',
        'ParcelType',
        'Length',
        'Width',
        'Height',
        'ReceiverName',
        'ReceiverAddress',
        'ReceiverPhone',
        'ContractID'
    ];
}
