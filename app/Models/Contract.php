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

    protected $with = ['StandardContract', 'NonStandardContract', 'Customer'];


    protected $fillable = [
        'ContractType',
        'ContractValue',
        'StartDate',
        'EndDate',
        'CustomerID',
        'EmployeeID'
    ];

    public function StandardContract() {
        return $this->hasOne(StandardContract::class, 'ContractID', 'ContractID');
    }

    public function NonStandardContract()
    {
        return $this->hasOne(NonStandardContract::class, 'ContractID', 'ContractID');
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerID', 'CustomerID');
    }
}
