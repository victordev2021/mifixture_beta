<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    // Relación departamento uno a muchos inversa
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    // Relación municipios uno a muchos inversa
    public function municipalities()
    {
        return $this->hasMany(Municipality::class);
    }
}
