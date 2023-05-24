<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassFlight extends Model
{
    protected $table = 'classes';

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
