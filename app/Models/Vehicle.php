<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'Owner_number',
        'Make',
        'Model',
        'Color',
        'Type',
        'Plate_number',
    ];

}
