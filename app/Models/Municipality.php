<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación municipios uno a múchos inversa
    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    // Relación league uno a uno inversa
    public function league()
    {
        return $this->hasOne(League::class);
    }
}
