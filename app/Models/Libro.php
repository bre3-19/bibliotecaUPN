<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;

    protected $fillable = [
        'titulo',
        'cantidad',
        'autor',
        'area',
    ];

    public function clasificacion(): HasOne {
        return $this->hasOne(Clasificacion::class);
    }

    public function prestamo(): HasOne {
        return $this->hasOne(Prestamo::class);
    }
}
