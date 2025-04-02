<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}

