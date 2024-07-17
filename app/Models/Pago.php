<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }

    public function tipo_pagos()
    {
        return $this->hasMany(Tipo_pago::class);
    }
}
