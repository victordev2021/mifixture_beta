<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación league uno a muchos
    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
