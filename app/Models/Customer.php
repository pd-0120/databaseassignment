<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "Customer";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'CustomerID';
    public $timestamps = false;

    protected $fillable = [
        'FirstName',
        'LastName',
        'Street',
        'City',
        'State',
        'Pincode',
        'Phone',
        'Email',
        'DateOfBirth'
    ];
}
