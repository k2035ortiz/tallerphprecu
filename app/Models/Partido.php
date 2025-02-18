<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    public function gols()
    {
        return $this->hasMany(Gol::class);
    }
    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }
}
