<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParcelReceiver extends Model
{
    use HasFactory;

    protected $table = "ParcelReceiver";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ParcelReceiverID';

    public $timestamps = false;

    public $fillable = [
        'ReceiverFirstName',
        'ReceiverLastName',
        'ReceiverStreet',
        'ReceiverCity',
        'ReceiverState',
        'ReceiverPincode',
        'ReceiverPhone',
    ];
}
