<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompensationClaim extends Model
{
    use HasFactory;

    protected $table = "CompensationClaim";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'CompensationClaimID';

    public $timestamps = false;


    protected $fillable = [
        'CustomerID',
        'ParcelID',
        'ClaimAmount',
        'ClaimReason'
    ];

}
