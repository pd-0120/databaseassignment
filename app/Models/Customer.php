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

    protected $fillable = [
        'FirstName',
        'LastName',
        'Address',
        'Phone',
        'Email',
        'DateOfBirth'
    ];
}
