<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación de municipios uno a múchos
    public function provinces()
    {
        return $this->hasMany(Province::class);
    }
}
