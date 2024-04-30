<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "Payment";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'PaymentID';

    protected $fillable = [
        'PaymentDate',
        'PayableAmount',
        'CustomerID'
    ];
}