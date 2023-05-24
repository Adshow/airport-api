<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'iata_code',
        'city_id',
    ];
    
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function flightsOrigin()
    {
        return $this->hasMany(Flight::class, 'origin_id');
    }

    public function flightsDestination()
    {
        return $this->hasMany(Flight::class, 'destination_id');
    }
}
