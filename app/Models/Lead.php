<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = "Lead";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'LeadID';

    public $timestamps = false;


    protected $fillable = [
        'DateRecorded',
        'ParcelEnquiry',
        'CustomerID',
        'EmployeeID'
    ];
}
