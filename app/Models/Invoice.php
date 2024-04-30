<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = "Invoice";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'InvoiceID';

    public $timestamps = false;


    protected $fillable = [
        'InvoiceDate',
        'InvoiceAmount',
        'DueDate',
        'DiscountAmount',
        'CustomerID',
        'ParcelID'
    ];
}
