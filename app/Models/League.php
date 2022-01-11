<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación user league uno a múchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relación user municipality uno a uno inversa
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
    // Relación stages muchos a muchos.
    public function stages()
    {
        return $this->belongsToMany(Stage::class);
    }
    // Relación tournament uno a muchos
    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }
}
