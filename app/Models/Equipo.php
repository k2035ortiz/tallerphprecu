<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public function jugadors()
    {
        return $this->hasMany(Jugador::class);
    }

    public function partidos()
    {
        return $this->belongsToMany(Partido::class);
    }

    public function presidente()
    {
        return $this->hasOne(Presidente::class);
    }

}
