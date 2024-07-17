<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public function viajero()
    {
        return $this->belongsTo(Viajero::class);
    }

    public function destinos()
    {
        return $this->hasMany(Viaje::class);
    }

    public function origens()
    {
        return $this->hasMany(Origen::class);
    }
}
