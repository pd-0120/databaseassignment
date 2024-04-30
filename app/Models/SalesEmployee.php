<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesEmployee extends Model
{
    use HasFactory;

    protected $table = "SalesEmployee";

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'SalesEmployeeID';

    public $timestamps = false;


    protected $fillable = [
        'EmployeeID',
        'TFN',
    ];
}
