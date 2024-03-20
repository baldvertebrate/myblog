<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'owner_id',
        'make',
        'model',
        'color',
        'type',
        'plate_number',
    ];
    public function Owner(): HasOne
    {
        return $this->hasOne(Owner::class);
    }
}
