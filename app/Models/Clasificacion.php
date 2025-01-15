<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    /** @use HasFactory<\Database\Factories\ClasificacionFactory> */
    use HasFactory;

    protected $fillable = ['clasificacion'];

    public function libro(): HasOne {
        return $this->hasOne(Libro::class);
    }
}
