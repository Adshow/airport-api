<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'flight_id',
        'passenger_name',
        'passenger_cpf',
        'passenger_birthdate',
        'total_price',
        'class_id',
    ];
    
    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function baggage()
    {
        return $this->hasOne(Baggage::class);
    }
}
