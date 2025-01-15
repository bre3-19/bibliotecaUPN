<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'usuario',
        'email',
        'contrasena',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'verificacion' => 'datetime',
            'contrasena' => 'hashed',
        ];
    }

    public function image_path() {
        if($this->imagen_perfil) {
            return asset('storage/images/users'.$this->imagen_perfil);
        } else {
            return 'https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/64/external-user-interface-kiranshastry-lineal-color-kiranshastry.png';
        }
    }
}
