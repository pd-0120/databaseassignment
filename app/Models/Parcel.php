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

    public $timestamps = false;

    public $with = ['Contract'];

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

    public function Contract() {
        return $this->belongsTo(Contract::class, 'ContractID', 'ContractID');
    }
}
