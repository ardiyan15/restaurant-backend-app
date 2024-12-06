<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $fillable = [
        'name'
    ];

    public function operatingHours()
    {
        return $this->hasMany(OperatingHour::class, 'restaurant_id');
    }
}
