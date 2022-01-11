<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación leagues muchos a muchos.
    public function leagues()
    {
        return $this->belongsToMany(League::class);
    }
}
