<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "Employee";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'EmployeeID';
    public $timestamps = false;

    protected $fillable = [
        'FirstName',
        'LastName',
        'Phone',
        'Email',
        'DateOfBirth',
        'TFN'
    ];
}
