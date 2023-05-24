<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function airports()
    {
        return $this->hasMany(Airport::class);
    }
}
