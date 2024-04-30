<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryEmployee extends Model
{
    use HasFactory;

    protected $table = "DeliveryEmployee";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    // protected $primaryKey = 'DeliveryEmployeeID';

    protected $fillable = [
        'EmployeeID',
        'ABN'
    ];
}
