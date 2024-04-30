<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonStandardContract extends Model
{
    use HasFactory;

    protected $table = "NonStandardContract";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ContractID';
    public $timestamps = false;

    protected $fillable = [
        'DiscountPercentage',
        'ContractID',
    ];
}
