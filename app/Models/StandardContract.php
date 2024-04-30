<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandardContract extends Model
{
    use HasFactory;

    protected $table = "StandardContract";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'StandardContractID';

    protected $fillable = ['FixedPricing', 'StandardContractID'];
}
