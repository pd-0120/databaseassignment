<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $table = "Contract";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'ContractID';

    public $timestamps = false;


    protected $fillable = [
        'ContractType',
        'ContractValue',
        'StartDate',
        'EndDate',
        'CustomerID',
        'EmployeeID'
    ];
}
