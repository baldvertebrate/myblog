<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\HasMany;



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
        'specifics',
        'email',
        'license_code',
        'barangay_id',
        'Town',
    ];
    public function owner():HasOne
    {
        return $this-hasOne(Owner::class);
    }
    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    
    //public function town(): HasMany
    //{
   //     return $this->hasMany(Town::class);
    //}
}
}