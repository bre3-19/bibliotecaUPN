<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prestamo extends Model
{
    /** @use HasFactory<\Database\Factories\PrestamoFactory> */
    use HasFactory;

    protected $fillable = [
        'fecha_prestamo',
        'fecha_maximo',
        'fecha_entrega',
    ];

    public function libro(): HasOne {
        return $this->hasOne(Libro::class);
    }

    public function alumno() {
        return $this->belongsTo(Alumno::class);
    }
}
