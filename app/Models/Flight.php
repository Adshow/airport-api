<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'departure_datetime',
        'flight_number',
        'origin_id',
        'destination_id'
    ];
    
    public function airportOrigin()
    {
        return $this->belongsTo(Airport::class, 'origin_id');
    }

    public function airportDestination()
    {
        return $this->belongsTo(Airport::class, 'destination_id');
    }

    public function classes()
    {
        return $this->hasMany(ClassFlight::class);
    }

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }

    
     /**
     * Update the ticket prices of the flight based on the class prices.
     *
     * @return void
     */
    public function updateTicketPrices()
    {
        $classes = $this->classes()->get();

        foreach ($classes as $class) {
            $tickets = $class->tickets()->get();

            foreach ($tickets as $ticket) {
                $ticket->update([
                    'price' => $class->seat_price,
                ]);
            }
        }
    }
}
