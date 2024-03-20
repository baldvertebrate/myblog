<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Town extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'zipcode',
    ];

    public function barangay(): HasOne
    {
        return $this->hasOne(Barangay::class);
    }
}
