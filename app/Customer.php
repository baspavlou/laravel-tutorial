<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    //!Declare fields i can mass assign
    // protected $fillable = ['name', 'email', 'active'];

    //!Declare fields i can't mass assign
    protected $guarded = [];

    public function getActiveAttribute($attribute)
    {
        return [
            0 => 'Inactive',
            1 => 'Active'
        ][$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }
    public function company()
    {
        return $this->BelongsTo(Company::class);
    }
}
