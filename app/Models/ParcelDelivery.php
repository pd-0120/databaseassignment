<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelDelivery extends Model
{
    use HasFactory;

    protected $table = "ParcelDelivery";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ParcelDeliveryID';

    public $timestamps = false;


    protected $fillable = [
        'ParcelID',
        'DeliveryDate',
        'DeliveryStatus',
        'NumberOfAttempts',
        'EmployeeID'
    ];
}
