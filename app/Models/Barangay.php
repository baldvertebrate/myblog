<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;






class Barangay extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'town_id',
    ];
    public function town(): BelongsTo
    {
        return $this->belongsTo(Town::class);
    }

    public function people(): HasMany
    {
        return $this->hasMany(People::class);
    }
}

