<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baggage extends Model
{
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}

