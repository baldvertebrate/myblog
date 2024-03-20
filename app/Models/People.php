<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class People extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'contact_number',
        'category',
        'email',
        'license_code',
        'barangay_id',
    ];
    public function owner():HasOne
    {
        return $this-hasOne(Owner::class);
    }
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

}
