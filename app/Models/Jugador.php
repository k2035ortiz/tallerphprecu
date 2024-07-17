<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
    public function gols()
    {
        return $this->hasMany(Gol::class);
    }
}
